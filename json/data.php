<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <script>
            // async / await | chain rules

            // Chain Rule
            fetch("http://localhost/PhpWebDev/json/index.php")
                .then(res => res.json())
                .then(data =>{
                    for(let student in data) {
                        document.write(`<br><h1>${student}</h1><br>`)
                        data[student].forEach(_student => {
                            document.write(`<h1>${_student}</h1>`)
                        })
                    }
                })


        </script>
    </body>
</html>