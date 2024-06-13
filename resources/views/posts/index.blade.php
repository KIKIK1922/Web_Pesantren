<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card with Image and Text</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    body,
    html {
        height: 100%;
        font-family: Arial, sans-serif;
        background-color: #97978F;

    }

    .container {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        height: 100%;
        margin-left: 50px;
        gap: 20px;
    }

    .container img {
        width: 30%;
        left: 10%;
    }

    .btn1 {
        padding: 15px 35px;
        background-color: #696969;
        border-radius: 30px;
    }
    .btnn{
        position: absolute;
        display: flex;
        gap: 20px;
        left: 20%;
        top: 70%;
    }
    
    .btn1 a{
        text-decoration: none;
        font-size: 1.5vw;
        color: #4B0909;
        font-weight: 700;
    }
    .txt{
        font-size: 3.5vw;
        width: 30%;
        margin-top: 20px;
        line-height: 60px;
        font-weight: 500;
    }
    

</style>

<body>
    @include('shared.header')
    <div class="container mt-1">
    <div class="txt">
            <p>Lihat lah data ini <br>
             <a href="" style="text-decoration: none; color: red;">Klik Butoon ini</a><br>
        </div>

        <img src="{{ Asset ('img/sepatu1.jpg') }}" alt="" >
       
        <div class="btnn">
            <div class="btn1">
                
                <a href="/posts/shop">Lihat</a>
            </div>
           
        </div>
    </div>

</body>

</html>


{{ $posts->links() }}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>