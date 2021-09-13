<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Autoprotect</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;

            }
            #square_value,#prime_numbers {
                margin: 0 auto;
                margin-top: 20px;
            }
            .part-information {
                --column-width-min: 10em;
                }
            .part-id {
                --column-width-min: 10em;
            }
            .vendor-information {
                --column-width-min: 8em;
            }
            .table_row {
                display: flex;
                display: grid;
                grid-gap: 10px;
                grid-template-columns: repeat(10, 1fr);
            }
        </style>
    </head>
    <body>
        <section id="square_value" class="w-2/3	h-2/3 bg-blue-500 p-6">
            <h2 class="font-bold text-center text-xl mb-2 text-white">First exercise</h2>
            <p class="text-lg">A square value is the number you get when you multiply two
                numbers that are the same together. For example the square value of 4 is 16 (4 x
                4 = 16). A multiplication table is a matrix where the header row and the header
                column of a table contain sequential integers. The cell values of the table
                contain the value when you multiply the corresponding header row and header
                column integer together.</p>
            <div class="table_1 flex justify-center align-center mt-10">
                <form action="#" method="get">
                    <table border=1 class="bg-blue-200 rounded p-2">                        
                        <?php 
                            if( isset($_GET['square']) ){
                                $number_elements = htmlentities($_GET['square']);
                                $number_elements;
                            }else{
                                $number_elements = 12;
                            }
                        ?>
                        @for($row = 1; $row < $number_elements+1; $row++)
                            <tr>
                                @for($column = 1; $column <  $number_elements+1; $column++)
                                    @php 
                                        $square =  $column * $row;
                                    @endphp
                                    <td class="font-bold p-1">{{ $square }}</td>                            
                                @endfor
                            </tr>
                        @endfor
                    </table>
                    <div class="flex justify-center align-center mt-6">
                        <input class="mr-2 w-12 p-2 rounded" type="text" name="square" id="val1"></input>
                        <button class="bg-white p-2 rounded" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </section>

        <section id="prime_numbers" class="w-2/3 h-2/3 bg-blue-500 p-6">
            <h2 class="font-bold text-center text-xl mb-2 text-white">Second exercise</h2>
            <p class="text-lg">Prime number is a number that is only divisble by one and
                itself. With this matrix you will need to produce a table that displays all
                numbers with no header rows and highlight the prime numbers within the table.</p>
            <div class="table_1 flex justify-center align-center mt-10">
                <form action="#" method="get">
                    <div class="table_row bg-blue-200 rounded p-2">
                    @php
                        if( isset($_GET['prime']) ){
                            $cap_number = htmlentities($_GET['prime']);
                            if($cap_number>1000)
                                $cap_number=1000;
                        }else{
                            $cap_number = 100;
                        }
                        for($num = 1; $num <= $cap_number; $num++) {
                            $checker = checkPrime($num);
                            if ($checker == 1) {
                                @endphp
                                <p class="font-bold">{{ $num }}</td>
                                @php
                            }	
                        }
                    @endphp</div>@php
                            function checkPrime($num){
                                if ($num == 1)
                                    return 0;
                                for ($i = 2; $i <= $num/2; $i++){
                                    if ($num % $i == 0)
                                    return 0;
                                }
                                return 1;
                            }
                      @endphp
                      </div>
                    <div class="flex justify-center align-center mt-6">
                        <input class="mr-2 w-12 p-2 rounded" type="text" name="prime"></input>
                        <button class="bg-white p-2 rounded" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>
