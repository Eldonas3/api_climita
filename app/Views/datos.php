<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
</head>
<body>
    <script>
        new Vue({
            el:'#app',
            data:{
                ubicaciones: []
            },
            mounted(){
                this.fetchData();
            },
            methods:{
                async fetchData(){
                    try{
                        const response = await fetch('http://localhost:8080/clima/getUbicaciones');
                    }catch(error){
                        console.error('Error al recuperar los datos',error);
                    }
                }
            }
        });
    </script>
    <div id="app">
        <h1>Ubicaciones</h1>
        <ul>
            <li v-for="(ubicacion,index) in ubicaciones" :key="index">{{ubicacion.ubicacion}}</li>
        </ul>
    </div>
<pre>
    <?php
        echo json_encode($datos);
    ?>
</pre>
</body>
</html>