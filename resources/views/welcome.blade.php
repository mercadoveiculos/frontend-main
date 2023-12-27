<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex justify-center items-center h-screen bg-blue-950">

    <div class="text-center max-w-full px-6">
        <img src="{{asset('img/logo.png')}}" alt="Imagem Centralizada" class="mx-auto max-w-full h-auto">

        <h1 class="text-yellow-400 text-2xl mt-10">Divulgue seu veículo ou serviço gratuitamente e alcance o sucesso!
        </h1>
        <h2 class="text-white text-lg mt-10">Contagem regressiva para o Lançamento: <span id="countdown"></span></h2>
    </div>

    <script>
        // Define a data de início para 27 de dezembro de 2024
        const startDate = new Date(2024, 0, 1); // 11 representa Dezembro, pois Janeiro é 0
        startDate.setHours(0, 0, 0, 0); // Início do dia à meia-noite

        // Define a data alvo somando 90 dias à data de início
        const targetDate = new Date(startDate.getTime());
        targetDate.setDate(targetDate.getDate() + 90);

        // Função para atualizar a contagem regressiva
        function updateCountdown() {
            const now = new Date();
            const difference = targetDate - now;

            // Calcula tempo restante
            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            // Mostra o resultado no elemento com id="countdown"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " 
                + minutes + "m " + seconds + "s ";

            // Quando a contagem terminar, exibir uma mensagem
            if (difference < 0) {
                clearInterval(interval);
                document.getElementById("countdown").innerHTML = "Lançamento!";
            }
        }

        // Atualiza a contagem regressiva a cada segundo
        const interval = setInterval(updateCountdown, 1000);
    </script>

</body>

</html>