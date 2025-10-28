<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sorteio de Rifa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #662c99ff 0%, #22063fff 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            max-width: 600px;
            width: 100%;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo {
            background: #e63946;
            color: white;
            padding: 12px 25px;
            display: inline-block;
            font-weight: bold;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 18px;
        }

        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .data-hora {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 40px;
            margin-bottom: 25px;
            text-align: center;
        }

        .data-hora p {
            color: #666;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .data-hora strong {
            color: #333;
            font-size: 20px;
        }

        label {
            display: block;
            color: #333;
            font-weight: bold;
            margin-bottom: 8px;
            margin-top: 15px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 25px;
            background:#fb9393ff;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s;
        }

        button:hover {
            transform: translateY(-2px);
        }

        .resultado {
            margin-top: 30px;
            padding: 25px;
            background: #870101ff;
            border-radius: 10px;
        }

        .resultado h2 {
            color: white;
            text-align: center;
            margin-bottom: 15px;
        }

        .info-premio {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .info-premio p {
            color: #333;
            margin: 5px 0;
        }

        .ganhador {
            background: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .ganhador strong {
            color: #667eea;
            font-size: 18px;
        }

        .posicao {
            background: #ffd700;
            color: #333;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 14px;
        }

        .historico {
            margin-top: 30px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 10px;
        }

        .historico h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .sorteio-item {
            background: white;
            padding: 20px;
            margin-bottom: 15px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }

        .sorteio-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e0e0e0;
        }

        .sorteio-header h3 {
            color: #667eea;
            font-size: 18px;
        }

        .sorteio-data {
            color: #666;
            font-size: 12px;
        }

        .sorteio-info {
            color: #666;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .ganhador-mini {
            background: #f8f9fa;
            padding: 8px 12px;
            margin: 5px 0;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 14px;
        }

        .btn-historico {
            background: #667eea;
            margin-top: 15px;
        }

        .btn-limpar {
            background: #e63946;
            margin-top: 10px;
            font-size: 14px;
            padding: 10px;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">SESI SENAI</div>
            <h1>Sorteio de Rifa</h1>
        </div>

        <div class="data-hora">
            <p>Data e Hora Atual</p>
            <strong id="relogio"></strong>
        </div>

        <form id="formSorteio">
            <label>Nome do Prêmio:</label>
            <input type="text" id="premio" name="premio" required>

            <label>Intervalo das Rifas:</label>
            <select id="intervalo" name="intervalo" required>
                <option value="">Selecione um intervalo</option>
                <option value="1-100">01 a 100</option>
                <option value="1-300">01 a 300</option>
                <option value="101-200">101 a 200</option>
                <option value="201-300">201 a 300</option>
                <option value="301-400">301 a 400</option>
                <option value="401-500">401 a 500</option>
                <option value="501-600">501 a 600</option>
                <option value="601-700">601 a 700</option>
                <option value="701-800">701 a 800</option>
                <option value="801-900">801 a 900</option>
                <option value="901-1000">901 a 1000</option>
            </select>

            <button type="submit">SORTEAR GANHADOR</button>
            <button type="button" class="btn-historico" onclick="toggleHistorico()">VER HISTÓRICO DE SORTEIOS</button>
        </form>

        <div id="resultadoAtual"></div>

        <div id="historicoContainer" class="historico hidden">
            <h2>Histórico de Sorteios</h2>
            <div id="listaHistorico"></div>
            <button type="button" class="btn-limpar" onclick="limparHistorico()">LIMPAR HISTÓRICO</button>
        </div>
    </div>

    <script>
        function atualizarRelogio() {
            const agora = new Date();
            
            const dia = String(agora.getDate()).padStart(2, '0');
            const mes = String(agora.getMonth() + 1).padStart(2, '0');
            const ano = agora.getFullYear();
            
            const horas = String(agora.getHours()).padStart(2, '0');
            const minutos = String(agora.getMinutes()).padStart(2, '0');
            const segundos = String(agora.getSeconds()).padStart(2, '0');
            
            const dataHora = `${dia}/${mes}/${ano} - ${horas}:${minutos}:${segundos}`;
            
            document.getElementById('relogio').textContent = dataHora;
        }
        
        atualizarRelogio();
        setInterval(atualizarRelogio, 1000);

        async function realizarSorteio(premio, intervalo) {
            const partes = intervalo.split('-');
            const inicio = parseInt(partes[0]);
            const fim = parseInt(partes[1]);
            
            const qtd = 3;
            const sorteados = [];
            
            while (sorteados.length < qtd) {
                const num = Math.floor(Math.random() * (fim - inicio + 1)) + inicio;
                if (!sorteados.includes(num)) {
                    sorteados.push(num);
                }
            }
            
            const dataHora = new Date().toLocaleString('pt-BR');
            
            const sorteio = {
                id: Date.now(),
                premio: premio,
                intervalo: intervalo,
                inicio: inicio,
                fim: fim,
                ganhadores: sorteados.map((num, index) => ({
                    posicao: index + 1,
                    numero: num
                })),
                dataHora: dataHora,
                timestamp: Date.now()
            };
            
            await salvarSorteio(sorteio);
            
            return sorteio;
        }

        async function salvarSorteio(sorteio) {
            try {
                const historico = await carregarHistorico();
                historico.push(sorteio);
                
                await window.storage.set('historico-sorteios', JSON.stringify(historico));
                console.log('Sorteio salvo com sucesso!');
            } catch (error) {
                console.error('Erro ao salvar sorteio:', error);
            }
        }

        async function carregarHistorico() {
            try {
                const result = await window.storage.get('historico-sorteios');
                if (result && result.value) {
                    return JSON.parse(result.value);
                }
                return [];
            } catch (error) {
                console.log('Nenhum histórico encontrado, iniciando novo.');
                return [];
            }
        }
        function exibirResultado(sorteio) {
            const posicoes = ['1º', '2º', '3º'];
            
            let html = `
                <div class="resultado">
                    <h2>Resultado do Sorteio</h2>
                    
                    <div class="info-premio">
                        <p><strong>Prêmio:</strong> ${sorteio.premio}</p>
                        <p><strong>Intervalo:</strong> ${sorteio.inicio} a ${sorteio.fim}</p>
                        <p><strong>Quantidade de Ganhadores:</strong> ${sorteio.ganhadores.length}</p>
                        <p><strong>Data/Hora:</strong> ${sorteio.dataHora}</p>
                    </div>
            `;
            
            sorteio.ganhadores.forEach((ganhador, index) => {
                html += `
                    <div class="ganhador">
                        <span class="posicao">${posicoes[index]} Lugar</span>
                        <strong>Rifa nº ${String(ganhador.numero).padStart(4, '0')}</strong>
                    </div>
                `;
            });
            
            html += '</div>';
            
            document.getElementById('resultadoAtual').innerHTML = html;
        }

        async function exibirHistorico() {
            const historico = await carregarHistorico();
            const container = document.getElementById('listaHistorico');
            
            if (historico.length === 0) {
                container.innerHTML = '<p style="text-align: center; color: #666;">Nenhum sorteio realizado ainda.</p>';
                return;
            }
        
            historico.sort((a, b) => b.timestamp - a.timestamp);
            
            let html = '';
            const posicoes = ['1º', '2º', '3º'];
            
            historico.forEach((sorteio, idx) => {
                html += `
                    <div class="sorteio-item">
                        <div class="sorteio-header">
                            <h3>Sorteio #${historico.length - idx}</h3>
                            <span class="sorteio-data">${sorteio.dataHora}</span>
                        </div>
                        <div class="sorteio-info">
                            <strong>Prêmio:</strong> ${sorteio.premio}<br>
                            <strong>Intervalo:</strong> ${sorteio.inicio} a ${sorteio.fim}
                        </div>
                        <div>
                            ${sorteio.ganhadores.map((g, i) => `
                                <div class="ganhador-mini">
                                    <span>${posicoes[i]} Lugar</span>
                                    <strong>Rifa nº ${String(g.numero).padStart(4, '0')}</strong>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                `;
            });
            
            container.innerHTML = html;
        }

        async function toggleHistorico() {
            const container = document.getElementById('historicoContainer');
            if (container.classList.contains('hidden')) {
                await exibirHistorico();
                container.classList.remove('hidden');
            } else {
                container.classList.add('hidden');
            }
        }

        async function limparHistorico() {
            if (confirm('Tem certeza que deseja limpar todo o histórico de sorteios?')) {
                try {
                    await window.storage.delete('historico-sorteios');
                    await exibirHistorico();
                    alert('Histórico limpo com sucesso!');
                } catch (error) {
                    console.error('Erro ao limpar histórico:', error);
                    alert('Erro ao limpar histórico.');
                }
            }
        }
        document.getElementById('formSorteio').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const premio = document.getElementById('premio').value;
            const intervalo = document.getElementById('intervalo').value;
            
            if (!premio || !intervalo) {
                alert('Por favor, preencha todos os campos!');
                return;
            }
            
            const sorteio = await realizarSorteio(premio, intervalo);
            exibirResultado(sorteio);
            
            document.getElementById('formSorteio').reset();
        });
    </script>
</body>
</html>