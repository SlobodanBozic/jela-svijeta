<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <style>
        tr {
          border-bottom:1px solid blue;
          }
        </style>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
          <div class="content">

<table style="width:65%;height:90%;" align="center">

<tr>
<th colspan="4" style="background-color:#5E1D55;color:white;"><h3>Examples of API endpoint</h3></th>
</tr>

<tr style="background-color:#32A9EE;color:white;">
<th>Name</th>
<th>Request Example</th>
<th>Request Link</th>

</tr>

<tr>
<td><b>get meals per page</b></td>
<td>http://localhost:8000/api/response/meals?per_page=1</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=1">/meals?per_page=1</a></td>
</tr>

<tr>
<td><b>Show only first page</b></td>
<td>http://localhost:8000/api/response/meals?page=1</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?page=1">/meals?page=1</a> </td>
</tr>

<tr>
<td><b>per_page are 3, lang=hr, with=category,tags,ingredient</b></td>
<td>http://localhost:8000/api/response/meals?per_page=3&lang=hr&with=category,tag,ingredient</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=3&lang=hr&with=category,tag,ingredient">/meals?per_page=3&lang=hr&with=category,tag,ingredient</a></td>
</tr>

<tr>
<td><b>get language HR</b></td>
<td>http://localhost:8000/api/response/ingredients?lang=hr</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients?lang=hr">ingredients?lang=hr</a> </td>
</tr>

<tr>
<td><b>get language ENG</b></td>
<td>http://localhost:8000/api/response/ingredients?lang=en</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients?lang=en">/ingredients?lang=en</a> </td>
</tr>

<tr>
<td><b>get language DE</b></td>
<td>http://localhost:8000/api/response/ingredients?lang=de</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients?lang=de">/ingredients?lang=de</a> </td>
</tr>

<tr>
<td><b>get request 'koji se nalazi u zadatku samo bez' diff_time</b></td>
<td>per_page=3&tags=2&lang=hr&with=ingredients,category,tags&page=2</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=3&tags=2&lang=hr&with=ingredients,category,tags&page=2">meals?per_page=3&tags=2&lang=hr&with=ingredients,category,tags&page=2</a></td>
</tr>

<tr>
<td><b>get all meals</b></td>
<td>http://localhost:8000/api/response/meals</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals">/meals</a></td>
</tr>

<tr>
<td><b>get meal by id</b></td>
<td>http://localhost:8000/api/response/meals?id=1</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?id=1">/meal id of 1</a></td>
</tr>

<tr>
<td><b>get all categories</b></td>
<td>http://localhost:8000/api/response/categories</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/categories">/categories</a></td>
</tr>

<tr>
<td><b>get all tags</b></td>
<td>http://localhost:8000/api/response/tags</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/tags">/tags </a> </td>
</tr>

<tr>
<td><b>get all ingredients</b></td>
<td>http://localhost:8000/api/response/ingredients</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients">/ingredients </a></td>
</tr>

          </div>
        </div>
      </div>
    </body>
</html>
