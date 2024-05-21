# アプリケーション名

## 環境構築

### Dockerビルド
1. [git clone](https://github.com/coachtech-material/laravel-docker-template.git)
2. docker-compose up -d --build

### Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan make:factory ContactFactory
7. php artisan db:seed

## 使用技術(実行環境)
- Laravel 8.83.27

## ER図
![ability-test](https://github.com/hstonewell/ability-test/assets/163955735/18bf855c-619a-4155-8f5f-2f7462496fae)
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="462px" height="558px" viewBox="-0.5 -0.5 462 558" content="&lt;mxfile&gt;&lt;diagram id=&quot;7BtrnhdWlw9BxMllhvqb&quot; name=&quot;ページ1&quot;&gt;7Z1db+I4FIZ/Dbcr8glcLkz3Q9vRjtpZ7eXIxSZYMjZyzADz69dOHFJw3MJOSMtpJKTGB8eJz2s/xk6OO4hmq93vEq2XnwUmbBAO8W4QfRqEYRAEI/3HWPalZTweloZMUmwz1YZH+oNYY5VtQzHJjzIqIZii62PjXHBO5urIhqQU2+NsC8GOr7pGGXEMj3PEXOu/FKtlaU3GUW3/g9Bsaa88Dm19V6jKayuSLxEW22em6G4QzaQQqjxa7WaEGd9VbinP+83z7eG+JOHqnBPC8oTviG1s1WZIkUxIqt1b3qHaV7XWN7s2hwo9GdM0V0gqK0401AbtboUoJ1IbgiLNGFrntMheWpaU4Xu0FxtVFVSlpgu6I/ih1Mbk1TLd68JM0hS+0IU/2psxXyNGM66P57qq5opTSXJ9L/coVzaHrRuRiuy8/gkOXtetlYgVUXKvs9gTUquTbadhbNPbWvWgarvLZ4pPrA3ZhpYdSq7F0AdWj2ZtIkeblxV5MA1putTa/TA6MOu35yoV6S1dMcR1A0X4xDQVRYcsvE0ZmwkmjJRccOKoaTJhKdZfkcyIsoa1oFwVVU6m+qOdMBv+kgwSfa8znQ7qtP6Y7FLNBM+V1K3GlEG0eFtiBJwqsbaFMrKoypfWw+b4SSglVpdIHTZLbbWNzpQ2akHa2JH2y19ecXUVFEXsQYMM8YyVUhRcQ7UUDXo1evDgtVN3nnYvoZ25YAWblhRjws/1ctTs5WdujS70qi2sdsDFpSGmEcE12aZiw3HuSHW4z7PUS3zQ3P/56Y1VrKBY5p3mazSnPLsvz0xPZE6uIPPO35mSVmU/q7h2dU97IJ8F5GE7QE47BPLofGm76cgE06q8n6JxCp7GY0c68zPUOOCdo7htTSGjN2gYcw1T56qfphjnx8fzlHF8JjovbAT2cvHw+HJR6La5SfdtpB+fW54wlb3uXcyYAneEhjNlCuCP0oE7TFuAf6A5k09n0CP3pKdyu7OmV6jc5bSpGvfhzZvKZgsayVW1b3Idq3VhITM4SnrkXhO5kw6RG6VACBt5fAqIsJE7aWG6nX7jaEXAAtanK2jAjnvAXhOwQcMC0/UIO4FC2DF4wsbuBGRBJXjEeoSFjNh41CP2qohNOkRs7B8vbwuxZauEjVh3AS8jHBMJFq8+UUHjNe7xelW8jrvEq3+958bwGsPHq/vUmqwQZXDp6tEUNF2Dnq7XpOshMKQTukJ5xhV7XiqCRFc3iEIRwGx95TUxiGxNop6tV2XruTFPbbA18U9DboutyQcIg3HfyUUYS5L7X8m9db76VAXN12HP16vyddQlX/0TkRvj6xA+X0OHr08byrBmGVzAemSFDNiGeNKeuNckbjTskLiXRI3eFoJD+C9wNcSFYqIgr876RIUM4MSNTXH0JTgjVQyIdhZV+wfCkKKC39XflJEiJYGD0DBarZjtZoTjX83OMzp596A1/yo+I76vsF1/tUIc/100ifIezIX9oHu1BwbDBncejLKow/fjC7yg2ReD/bo1HJZCq5+yk/FxEbnYyDmxZ9UaOQVFJwUFpwWpYvBxCvo/YruPs//JX3iY/YGiSE82u4nPfa350GV/ZpysLt7/CmorejPxRDq8QfRm6oaawIneTOFPRVN3Kmqg+f7DhFoL3fSJDPl3UdrvQNbyxPQVJHcZupm6e5C9cWdubcsb+I9eUnfJCPQL7z5JQdO3386kW/p2GcWZwt1wDP5eJqm7XgT7lU2fpqDx2+9b0i1+O43xrJ65A+Qv/I1LRu5q0hrl+VZIDBfB8Lct0cl64/sye/3fA6K7/wA=&lt;/diagram&gt;&lt;/mxfile&gt;"><defs><clipPath id="mx-clip-0-186-30-30-0"><rect x="0" y="186" width="30" height="30"/></clipPath><clipPath id="mx-clip-36-186-144-30-0"><rect x="36" y="186" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-216-144-30-0"><rect x="36" y="216" width="144" height="30"/></clipPath><clipPath id="mx-clip-280-30-30-30-0"><rect x="280" y="30" width="30" height="30"/></clipPath><clipPath id="mx-clip-316-30-144-30-0"><rect x="316" y="30" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-60-144-30-0"><rect x="316" y="60" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-90-144-30-0"><rect x="316" y="90" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-120-144-30-0"><rect x="316" y="120" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-150-144-30-0"><rect x="316" y="150" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-180-144-30-0"><rect x="316" y="180" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-210-144-30-0"><rect x="316" y="210" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-240-144-30-0"><rect x="316" y="240" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-270-144-30-0"><rect x="316" y="270" width="144" height="30"/></clipPath><clipPath id="mx-clip-316-300-144-30-0"><rect x="316" y="300" width="144" height="30"/></clipPath><clipPath id="mx-clip-0-436-30-30-0"><rect x="0" y="436" width="30" height="30"/></clipPath><clipPath id="mx-clip-36-436-144-30-0"><rect x="36" y="436" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-466-144-30-0"><rect x="36" y="466" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-496-144-30-0"><rect x="36" y="496" width="144" height="30"/></clipPath><clipPath id="mx-clip-36-526-144-30-0"><rect x="36" y="526" width="144" height="30"/></clipPath></defs><g><path d="M 0 186 L 0 156 L 180 156 L 180 186" fill="rgb(255, 255, 255)" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="all"/><path d="M 0 186 L 0 246 L 180 246 L 180 186" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 186 L 180 186" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 186 L 30 216 L 30 246" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" text-anchor="middle" font-size="12px"></g><path d="M 0 186 M 180 186 M 180 216 L 0 216" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 186 M 30 186 M 30 216 M 0 216" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" clip-path="url(#mx-clip-0-186-30-30-0)" text-anchor="middle" font-size="12px"></g><path d="M 30 186 M 180 186 M 180 216 M 30 216" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" text-decoration="underline" pointer-events="none" clip-path="url(#mx-clip-36-186-144-30-0)" font-size="12px"></g><path d="M 0 216 M 30 216 M 30 246 M 0 246" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 216 M 180 216 M 180 246 M 30 246" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-216-144-30-0)" font-size="12px"></g><path d="M 280 30 L 280 0 L 460 0 L 460 30" fill="rgb(255, 255, 255)" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 280 30 L 280 330 L 460 330 L 460 30" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 280 30 L 460 30" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 30 L 310 60 L 310 90 L 310 120 L 310 150 L 310 180 L 310 210 L 310 240 L 310 270 L 310 300 L 310 330" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" text-anchor="middle" font-size="12px"></g><path d="M 280 30 M 460 30 M 460 60 L 280 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 280 30 M 310 30 M 310 60 M 280 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" clip-path="url(#mx-clip-280-30-30-30-0)" text-anchor="middle" font-size="12px"></g><path d="M 310 30 M 460 30 M 460 60 M 310 60" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" text-decoration="underline" pointer-events="none" clip-path="url(#mx-clip-316-30-144-30-0)" font-size="12px"></g><path d="M 280 60 M 310 60 M 310 90 M 280 90" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 60 M 460 60 M 460 90 M 310 90" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-60-144-30-0)" font-size="12px"></g><path d="M 280 90 M 310 90 M 310 120 M 280 120" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 90 M 460 90 M 460 120 M 310 120" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-90-144-30-0)" font-size="12px"></g><path d="M 280 120 M 310 120 M 310 150 M 280 150" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 120 M 460 120 M 460 150 M 310 150" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-120-144-30-0)" font-size="12px"></g><path d="M 280 150 M 310 150 M 310 180 M 280 180" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 150 M 460 150 M 460 180 M 310 180" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-150-144-30-0)" font-size="12px"></g><path d="M 280 180 M 310 180 M 310 210 M 280 210" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 180 M 460 180 M 460 210 M 310 210" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-180-144-30-0)" font-size="12px"></g><path d="M 280 210 M 310 210 M 310 240 M 280 240" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 210 M 460 210 M 460 240 M 310 240" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-210-144-30-0)" font-size="12px"></g><path d="M 280 240 M 310 240 M 310 270 M 280 270" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 240 M 460 240 M 460 270 M 310 270" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-240-144-30-0)" font-size="12px"></g><path d="M 280 270 M 310 270 M 310 300 M 280 300" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 270 M 460 270 M 460 300 M 310 300" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-270-144-30-0)" font-size="12px"></g><path d="M 280 300 M 310 300 M 310 330 M 280 330" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 310 300 M 460 300 M 460 330 M 310 330" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-316-300-144-30-0)" font-size="12px"></g><path d="M 182 214 L 202 214 Q 212 214 215.71 204.72 L 248.29 123.28 Q 252 114 262 114 L 282 114" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 186 210 L 186 218 M 190 210 L 190 218" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 274 118 L 274 110 M 282 110 L 274 114 L 282 118" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 436 L 0 406 L 180 406 L 180 436" fill="rgb(255, 255, 255)" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 436 L 0 556 L 180 556 L 180 436" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 436 L 180 436" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 436 L 30 466 L 30 496 L 30 526 L 30 556" fill="none" stroke="rgb(0, 0, 0)" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" text-anchor="middle" font-size="12px"></g><path d="M 0 436 M 180 436 M 180 466 L 0 466" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 0 436 M 30 436 M 30 466 M 0 466" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" pointer-events="none" clip-path="url(#mx-clip-0-436-30-30-0)" text-anchor="middle" font-size="12px"></g><path d="M 30 436 M 180 436 M 180 466 M 30 466" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" font-weight="bold" text-decoration="underline" pointer-events="none" clip-path="url(#mx-clip-36-436-144-30-0)" font-size="12px"></g><path d="M 0 466 M 30 466 M 30 496 M 0 496" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 466 M 180 466 M 180 496 M 30 496" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-466-144-30-0)" font-size="12px"></g><path d="M 0 496 M 30 496 M 30 526 M 0 526" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 496 M 180 496 M 180 526 M 30 526" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-496-144-30-0)" font-size="12px"></g><path d="M 0 526 M 30 526 M 30 556 M 0 556" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><path d="M 30 526 M 180 526 M 180 556 M 30 556" fill="none" stroke="rgb(0, 0, 0)" stroke-linecap="square" stroke-miterlimit="10" pointer-events="none"/><g fill="rgb(0, 0, 0)" font-family="Helvetica" pointer-events="none" clip-path="url(#mx-clip-36-526-144-30-0)" font-size="12px"></g></g></svg>

## URL
- 開発環境：http://localhost/
- phpMyAdmin：http://localhost:8080/