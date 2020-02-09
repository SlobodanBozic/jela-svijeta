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
<td>get meals per page <b>'default value(lang=hr)'</b></td>
<td>http://localhost:8000/api/response/meals?per_page=1</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=1">/meals?per_page=1</a></td>
</tr>

<tr>
<td>Show only first page <b>'default value(lang=hr)'</b></td>
<td>http://localhost:8000/api/response/meals?page=1</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?page=1">/meals?page=1</a> </td>
</tr>

<tr>
<td>per_page are 1, lang=hr, with=category,tags,ingredient <b>'default value(lang=hr)'</b></td>
<td>http://localhost:8000/api/response/meals?per_page=1&lang=hr&with=category,tag,ingredient</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=1&lang=hr&with=category,tag,ingredient">/meals?per_page=1&lang=hr&with=category,tag,ingredient</a></td>
</tr>

<tr>
<td>per_page are 1, lang=en, with=category,tags,ingredient'</td>
<td>http://localhost:8000/api/response/meals?per_page=1&lang=en&with=category,tag,ingredient</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=1&lang=en&with=category,tag,ingredient">/meals?per_page=1&lang=en&with=category,tag,ingredient</a></td>
</tr>

<tr>
<td>per_page are 1, lang=de, with=category,tags,ingredient</td>
<td>http://localhost:8000/api/response/meals?per_page=1&lang=de&with=category,tag,ingredient</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=1&lang=de&with=category,tag,ingredient">/meals?per_page=1&lang=de&with=category,tag,ingredient</a></td>
</tr>

<tr>
<td>get language <b>HR</b></td>
<td>http://localhost:8000/api/response/ingredients?lang=hr</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients?lang=hr">ingredients?lang=hr</a> </td>
</tr>

<tr>
<td>get language <b>ENG</b></td>
<td>http://localhost:8000/api/response/ingredients?lang=en</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients?lang=en">/ingredients?lang=en</a> </td>
</tr>

<tr>
<td>get language <b>DE</b></td>
<td>http://localhost:8000/api/response/ingredients?lang=de</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients?lang=de">/ingredients?lang=de</a> </td>
</tr>

<tr>
<td>get request 'koji se nalazi u zadatku'</td>
<td>per_page=3&tags=2&lang=hr&with=ingredients,category,tags&diff_
time=1493902343&page=1</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?per_page=3&tags=2&lang=hr&with=ingredients,category,tags&diff_
time=1493902343&page=1">meals?per_page=3&tags=2&lang=hr&with=ingredients,category,tags&diff_
time=1493902343&page=1</a></td>
</tr>

<tr>
<td><b>get all meals 'default value(lang=hr)'</b></td>
<td>http://localhost:8000/api/response/meals</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals">/meals</a></td>
</tr>

<tr>
<td>get all meals <b>HR</b></td>
<td>http://localhost:8000/api/response/meals?lang=hr</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?lang=hr">/meals HR</a></td>
</tr>

<tr>
<td>get all meals <b>ENG</b></td>
<td>http://localhost:8000/api/response/meals?lang=en</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?lang=en">/meals ENG</a></td>
</tr>

<tr>
<td>get all meals <b>DE</b></td>
<td>http://localhost:8000/api/response/meals?lang=de</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?lang=de">/meals DE</a></td>
</tr>

<tr>
<td>get meal by <b>id</b></td>
<td>http://localhost:8000/api/response/meals/1</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals/1">/meal id of 1</a></td>
</tr>

<tr>
<td>get meal by <b>difftime:1578581616 = 01/09/2020 15:53:36</b> status=<b>created</b></td>
<td>http://localhost:8000/api/response/meals?diff_time=1578581616</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?diff_time=1578581616">/meal difftime:1578581616 = 01/09/2020 15:53:36</a></td>
</tr>

<tr>
<td>get meal by <b>difftime:1589032416 = 05/09/2020 15:53:36</b> status=<b>modified</b></td>
<td>http://localhost:8000/api/response/meals?diff_time=1589032416</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/meals?diff_time=1589032416">/meal difftime:1589032416  = 05/09/2020 15:53:36</a></td>
</tr>

<tr>
<td>get all <b>categories</b></td>
<td>http://localhost:8000/api/response/categories</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/categories">/categories</a></td>
</tr>

<tr>
<td>get all <b>tags</b></td>
<td>http://localhost:8000/api/response/tags</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/tags">/tags </a> </td>
</tr>

<tr>
<td>get all <b>ingredients</b></td>
<td>http://localhost:8000/api/response/ingredients</td>
<td><a target="_blank" style="font-weight: 700; font-size: 14px; text-decoration: none;" href="http://localhost:8000/api/response/ingredients">/ingredients </a></td>
</tr>

          </div>
        </div>
      </div>
    </body>
</html>
