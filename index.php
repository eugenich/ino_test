<!DOCTYPE >
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <link href="style.css" rel="stylesheet" />
    <title></title>
</head>
<body>
<div class="jumbotron">
    <div class="container">
        <h1 itemprop="name">МЕНЕДЖЕР ФИНАНСОВ</h1><br /><br />
        <div class="row"><form action="action.php" method="post" enctype="multipart/form-data">
            <div class="col-md-6">
                <h2>Добавление доходов:</h2><br />
                    <label class="control-label" >Доход: </label>
                        <input class="input-xlarge" placeholder=" Введите сумму: => (100)" type="text" name="income_d" /><br /><br />

                    <label class="control-label" >Дата: </label>
                         <input class="input-xlarge" placeholder=" Введите дату: M, D, Y => (1, 15, 2017)" type="text" name="income_m" /><br /><br /><br />

                <button type="submit" class="btn btn-primary">Добавить доход</button>

            </div>
            <div class="col-md-6">
                <h2>Добавление расходов:</h2><br />

                    <label class="control-label" >Расоход: </label>
                        <input class="input-xlarge" placeholder=" Введите сумму: => (100)" type="text" name="expenses_m" /><br /><br />

                    <label class="control-label" >Дата: </label>
                        <input class="input-xlarge" placeholder=" Введите дату: M, D, Y => (1, 15, 2017)" type="text" name="expenses_d" /><br /><br /><br />

                <button type="submit"  class="btn btn-primary">Добавить расход</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <h1>Рачет баланса</h1><br />
    <div class="row">

        <?php include('balance.php'); ?>
    </div>
    <hr><br />
</div>
<?php include('times.php'); ?>
</body>
</html>
