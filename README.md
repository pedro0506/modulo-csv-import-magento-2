<h1>Módulo Importar CSV para Magento 2</h1>

Módulo compatível com versões a partir de 2.x

<code>INSTALAÇÃO</code>

<code>Na raiz do seu Magento 2 acessar app/code e criar as pastas "Crwa/ImportarCSV", onde o diretório deverá ficar "app/code/Crwa/ImportarCSV".</code>

<code>Fazer o download do módulo e extrair os arquivos dentro do diretório ImportarCSV.</code>

Você pode fazer o download do <a href="https://github.com/pedro0506/modulo-csv-import-magento-2/archive/master.zip">zip</a>

ou

Instalar via git hub: <code>git clone https://github.com/pedro0506/modulo-csv-import-magento-2.git</code>

Para o módulo funcionar é preciso criar a tabela no banco de dados que vai receber o CSV. 

Após a criação da tabela você deve editar o arquivo "CrwaImport.php" localizado em: Crwa/ImportarCSV/Model/Import/CrwaImport.php e contruir as colunas e alterar o nome da tabela para atender ao CSV que pretende subir.

Entre a linha 7 e a linha 13 é a construção das colunas da tabela onde você deverá editar de acordo com sua CSV.

<code>class CrwaImport extends \Magento\ImportExport\Model\Import\Entity\AbstractEntity
{
    const ID = 'coluna_1';
    const ORIGEM = 'coluna_2';
    const DESTINO = 'coluna_3';
    const ALIQUOTA = 'coluna_4';
    /* quantas colunas forem necessárias */
    const TABLE_ENTITY = 'nome_tabela'; </code>

É necessário também colocar o nome da tabela criada na linha 92 do arquivo CrwaImport.php:

<code>return 'nome_tabela';</code>

Feitas as modificações necessárias rodar os comandos do magento para ativação do módulo

<code>php bin/magento setup:upgrade</code>
<code>php bin/magento cache:clean</code>
