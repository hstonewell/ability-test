<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function admin()
    {
        $categories = Category::all();
        $contacts = Contact::paginate(7);
        return view('auth.admin', compact('contacts', 'categories'));
    }

    public function search(Request $request)
    {
        if ($request->has('reset')) {
            $contacts = Contact::with('category')->paginate(7);
        } else {
        $date = $request->input('date');
        $date = $date ? Carbon::parse($date)->toDateString() : null;

        $contacts = Contact::with('category')
        ->CategorySearch($request->input('category_id'))
        ->GenderSearch($request->input('gender'))
        ->byDate($date)
        ->KeywordSearch($request->input('keyword'))
        ->paginate(7)
        ->appends($request->all());
        }
        $categories = Category::all();

        return view('auth.admin', compact('contacts', 'categories'));
    }

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('auth.admin');
    }

    public function export(Request $request)
    {
        $query = Contact::query();

        $query = $this->getSearchQuery($request, $query);

        $csvData = $query->get()->toArray();

        $csvHeader = [
            'id',
            'category_id',
            'last_name',
            'first_name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'detail',
            'created_at',
            'updated_at'
        ];

        $response = new StreamedResponse(function () use ($csvHeader, $csvData) {
            $createCsvFile = fopen('php://output', 'w');

            mb_convert_variables('SJIS-win', 'UTF-8', $csvHeader);

            fputcsv($createCsvFile, $csvHeader);

            foreach ($csvData as $csv) {
                $csv['created_at'] = Carbon::make($csv['created_at'])->setTimezone('Asia/Tokyo')->format('Y/m/d H:i:s');
                $csv['updated_at'] = Carbon::make($csv['updated_at'])->setTimezone('Asia/Tokyo')->format('Y/m/d H:i:s');
                fputcsv($createCsvFile, $csv);
            }

            fclose($createCsvFile);
        }, 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="contacts.csv"',
        ]);

        return $response;
    }

    private function getSearchQuery(Request $request, $query)
    {
        $keyword = $request->input('keyword');
        $query->keywordSearch($keyword);

        if ($request->filled('gender')) {
            $query->where('gender', $request->input('gender'));
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        if ($request->filled('date')) {
            $query->whereDate('created_at', $request->input('date'));
        }

        return $query;
    }
}
