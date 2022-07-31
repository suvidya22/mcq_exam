<!doctype html>
<div class="title_left">
    <h3>All Results</h3>
</div>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Results</title>
    <link rel="shortcut icon" type="image/x-icon" href="icon.ico">
    <meta name="description" content="HTML, PHP, JSON, REST API">
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>
<div class="top-right links">
    <a href="{{ '/' }}">Bck to home</a>
</div>

<body>
    <table style="width:100%"; class="data-table">
        <tr>
            <th>Student name:</th>
            <th>Mobile</th>
            <th>Result</th>
        </tr>
        <?php foreach ($results as $result)  {    ?>
        <tr>
            <td>{{ $result->students->name }} </td>
            <td>{{ $result->students->mobile_number }}</td>
            <td> {{ $result->result }}</td>
        </tr>
        <?php  } ?>
    </table>
