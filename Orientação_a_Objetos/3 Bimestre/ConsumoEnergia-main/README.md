<strong>Atividade de Orientação a Objetos: Cálculo de Fatura de Energia</strong>

Enunciado do Exercício:
As concessionárias de energia calculam a fatura de luz com base no tipo de consumidor. De acordo com seu papel na sociedade, o custo do KWh é diferente. Neste sentido, implemente um programa com uma interface IConsumidorEnergia que definirá o método getValorFatura(). Após isso, declare as classes representando os tipos de consumidores para implementar a interface IConsumidorEnergia:

Residencial: deve cobrar R$ 1,05 por KWh consumido.
Comercial: deve cobrar R$ 1,45 por KWh consumido até 100 KWh, e R$ 1,60 ao que exceder 100 Kwh.
Industrial: deve cobrar R$ 1,80 por KWh consumido até 500 KWh e R$ 2,30 ao que exceder 500 KWh.
Todas as classes devem possuir um atributo denominado consumo.

Funcionalidades do programa:
Criar um objeto de uma das 3 classes (Residencial, Comercial, Industrial) para calcular o valor da fatura de energia. O tipo de consumidor deve ser informado para criar o objeto da classe correspondente.
Ler o valor do atributo consumo.
Exibir o resultado do método getValorFatura().
