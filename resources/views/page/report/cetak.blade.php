<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            font-size: 15px;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 6px;
        }

        h2 {
            text-align: center;
            padding: 1px;
            margin: 1px;
        }

        h4 {
            text-align: center;
            padding: 1px;
            margin: 1px;
            margin-bottom: 20px;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
            /** Define the margins of your page **/
            @page {
            margin: auto;

        }

        header {
                position: fixed;
                background-color: #F1F1F1;
                text-align: center;
          }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <header>
        <h2 class="text-center">Report Daily Acitivity</h2>
        <h4 class="text-center">Pt. Bank Mega Tbk.</h4>
    </header>
    <div class="row">
        <table>
            <tr>
                <th class="text-center">No</th>
                <th width='78px'class="text-center">Date</th>
                <th class="text-center">Activity</th>
                <th class="text-center">Time In/Out</th>
            </tr>
            @foreach ($report as $data)
                <tr>
                    <td class="text-center">
                        {{ $loop->iteration }}
                    </td>
                    <td class="text-center">
                        {{ $data->date }}
                    </td>
                    <td>
                        {{ $data->activity }}
                    </td>
                    <td class="text-center">
                        {{ $data->arrival_time }}-{{ $data->time_out }}
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

</body>

</html>
