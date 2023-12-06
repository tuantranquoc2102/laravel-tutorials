<!doctype html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Invoice</title>
        <link href="{{ public_path('pdf.css') }}" rel="stylesheet">
        <style>
            @media print {
                thead {
                    display: table-header-group;
                }

                tr {
                    page-break-inside: avoid;
                }
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-bottom: 20px;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <h1>Data of the first table</h1>

        <table>
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                    <!-- Add more header columns as needed -->
                </tr>
            </thead>
            <tbody>
                <!-- Your table rows go here -->
                @foreach($data1 as $item)
                <tr class="items">
                
                    <td>
                        {{ $item['quantity'] }}
                    </td>
                    <td>
                        {{ $item['description'] }}
                    </td>
                    <td>
                        {{ $item['price'] }}
                    </td>
                </tr>
                @endforeach
                <!-- ... -->
            </tbody>
        </table>

        <h1>Data of the second table</h1>

        <table>
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                    <th>Column 3</th>
                    <th>Column 4</th>
                    <!-- Add more header columns as needed -->
                </tr>
            </thead>
            <tbody>
                <!-- Your table rows go here -->
                @foreach($data2 as $item)
                <tr class="items">
                
                    <td>
                        {{ $item['index'] }}
                    </td>
                    <td>
                        {{ $item['userName'] }}
                    </td>
                    <td>
                        {{ $item['email'] }}
                    </td>
                    <td>
                        {{ $item['gender'] }}
                    </td>
                </tr>
                @endforeach
                <!-- ... -->
            </tbody>
        </table>
    </body>
</html>