@include("parts.common,["title" => "概要" ])

@include("parts.header")
<main>
    <h1>概要ページ</h1>
    <p>現在の時刻は {{ $current_time }} だよ</p>
</main>
@include("parts.footer")
</body>
</html>