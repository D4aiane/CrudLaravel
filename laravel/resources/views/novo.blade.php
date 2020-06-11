<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro de Usuários - Aprendendo Laravel</title>
  <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
  <style>
    *{
      margin:0;
      padding:0;
      box-sizing: border-box;
      text-decoration:none;
    }
    html{
      background:linear-gradient(coral, white) no-repeat;
      font-family: 'PT Sans', Arial;
    }
    header{
      width:100%;
      padding:10px;
      position:fixed;
      top:0;
      border-bottom:1px solid #f444;
      background-color:#fffe;
      box-shadow: 0px 3px 3px #f003;
    }
    header h1{
      background:url('https://www.mavenlogix.org/wp-content/uploads/2019/01/laravel-512-400x400.png') no-repeat;
      font-size:30px;
      padding-left:70px;
      line-height:50px;
      background-size:50px;
      color:#FF4B4B;
      width:80%;
      margin:0 auto;
    }
    header span{
      border-left:1px solid #f44;
      margin:0 15px;
    }
    header h1 a{
      font-size:16px;
      font-weight:normal;
      color:#f44;
    }
    main{
      border:1px solid #f44;
      border-radius:10px;
      box-shadow: 5px 5px 2px #f003;
      width:500px;
      min-height:200px;
      margin:100px auto 0;
    }

    h2{
      font-size:25px;
      padding:30px 0;
      text-align:center;
      background-color:#f44;
      color:white;
      border-radius:10px 10px 0 0;
      border-top:1px solid white;
      text-transform: uppercase;
    }

		#cadastro {
		  padding: 18px 6% 60px 6%;
		  background: #fffe;
      border-radius:0 0 10px 10px;
		}

    main p{ margin-bottom:15px; }

		label{
		  color: #f44;
		  position: relative;
		}

		input {
		  outline: none;
		  width: 95%;
		  margin-top: 5px;
		  padding: 10px;
		  border: 1px solid #f44;
		  font-size: 20px;
		  border-radius: 5px;
		  box-shadow: 0px 1px 4px 0px #f007 inset;
      color:#f44;
		}

    input[type="submit"]{
		  width: 100%!important;
		  cursor: pointer;
		  background: #f44;
		  padding: 20px 5px;
		  color: #fff;
		  font-size: 20px;
		  border: 1px solid #fff;
		  margin-bottom: 10px;
		  text-shadow: 0 1px 1px #333;
		  border-radius: 5px;
		  transition: all 0.2s linear;
		}
		input[type="submit"]:hover{
		  background: #f009;
		}
    input::placeholder{ color:#f447; }

    footer{
      text-align:center;
      padding:10px;
      margin-top:20px;
      font-size:14px;
      color:red;
      border-top:1px solid #f004;
    }
    footer a{
      color:red;
    }
    footer a:hover { text-decoration:underline; }
  </style>
</head>
<body>
  <header>
    <h1>Aprendendo Laravel<span></span><a href='usuarios'>home</a><span></span><a href='cadastrar'>cadastrar</a>
    </h1>
  </header>
  <main>
	    <h2>Cadastrar usuário</h2>
	    <form action='storage' method="post" id="cadastro">
            @csrf

	        <p>
		        <label for="name">Nome do usuário</label>
		        <input type="text" name="name" placeholder="exemplo: Fulano de Tal">
	        </p>
	        <p>
		        <label for="email">Email do usuário</label>
		        <input type="email" name="email" placeholder="exemplo:email@gmail.com">
	        </p>
	        <p>
		        <label for="password">Senha do usuário</label>
		        <input type="password" name="password" placeholder="exemplo: 12345">
	        </p>
            <input type="submit" value="Cadastrar usuário">
	    </form>
  </main>
  <footer>
    <p>Aprendendo Laravel - by Edson Luiz Parisotto - <a href='http://www.variavel.com.br/laravel'>www.variavel.com.br/laravel</a></p>
  </footer>
</body>
</html>
