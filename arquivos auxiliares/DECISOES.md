## Escolha da Stack
Para esse projeto decidi usar o PHP juntamente com HTML, e para formatação dos estilos o CSS puro, com alguns pontos de JavaScript, e para banco de dados escolhi o MySQL
juntamente com o ORM RedBean. Escolhi o PHP com RedBean por que são as tecnologias que mais trabalhei para construir págians WEB, tendo assim um domínio prévio, fazendo 
com que eu consiga entregar algo funcional e robusto com maior facilidade e segurança no tempo estabelecido.

## Escolha do tema
Escolhi o tema da Loja de Carros por que é um tema que pode abranger várias funcionalidades, inclusive as requisitadas nesse projeto, além de muitas outras que não foram aqui 
implementadas, assim abrindo bastante o leque de possibilidades do que eu fosse vir a criar e das funcionalidades que eu viria a implementar.

## Cortes de escopo
Decidi também fazer alguns cortes no escopo em vista do tempo que tinha disponível para trabalhar nesse desevolvimento, cortei por exemplo a opção de criar mais usuários 
admin, e a opção de editar um anúncio, entre algumas outras.

## Limitações Técnicas
- Uso de GET ao incés de POST
- Senha sem hash

## Estras além do solicitado
Como a mais além do que pediram, trouxe mais de uma ação para o usuário público, podendo vender e comprar carros, e na estrutura do site, a tabela de "compras" que tem a 
chave estrangeira anuncio, que referencia a qual anúncio aquele comprador se refere.

## SOBRE O USO DE IA:

### O que você delegou para a IA e o que fez à mão, e por quê
Não deleguei funções completas para a IA, usando ela principalmente como uma ferramenta para me auxiliar em pontos que tive dúvida, principalmente em relação a sintaxe e 
algumas funcionalidades de funções do RedBean, e para me ajudar a ter ideias de formatação no CSS. Toda a estruturação do site e a forma de funcionar dele foram totalmente 
pensadas por mim.

### Uma vez em que a IA te deu algo ruim ou errado: o que era, como você percebeu, e o que fez no lugar
Isso ocorreu algumas vezes, principalmente com a formatação do CSS, quando ela sugeriu algumas formatações que eu julguei não fazer sentido colocar, ou fiz adaptações
no resultado da IA, de forma que eu julguei fazer mais sentido.

### Uma decisão que você tomou contra a sugestão da IA, e o motivo
Isso como disse anteriormente ocorreu ao fazer o CSS, um exemplo foi quando ela sugeriu formatar o card da aprovação do anúncio com as tags <\dt> e <\dd>, e eu não o fiz, 
julguei suficiente formatar de forma diferente, apenas com <\strong>.