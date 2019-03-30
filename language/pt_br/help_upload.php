<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 - 2019 Igor Lavrov (https://github.com/LavIgor) and John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid [2019][ver 3.2.0-RC] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Some characters you may want to copy&paste:
// ’ » “ ” …

$help = array(
	array(
		0 => '--',
		1 => 'Módulos gerais'
	),
	array(
		0 => 'O que posso fazer com o recurso “Upload extension”?',
		1 => 'Você pode fazer o envio de extensões de diferentes fontes sem a necessidade de usar um cliente FTP. Quando você envia uma extensão que já existe no seu fórum, sua versão antiga será salva automaticamente no diretório especificado no seu fórum - confira o módulo "Gerenciamento de arquivos ZIP". Você também pode salvar o arquivo zip da versão atualmente enviada da extensão - marque o sinalizador “Salvar arquivo zip enviado” antes do processo de envio. Você pode fazer o envio do pacote zip da extensão real se especificar sua soma de verificação no campo de formulário correspondente.'
	),
	array(
		0 => 'Qual é a diferença entre o "Administrar Extensões do Upload Extensions" e o "Administrar Extensões" padrão?',
		1 => 'Assim como o "Administrar Extensões" padrão, o "Administrar Extensões do Upload Extensions" é uma ferramenta no seu Fórum phpBB que permite gerenciar todas as suas extensões e visualizar informações sobre elas. Mas isso pode ser determinado como uma "versão atualizada" do módulo padrão.<br /><br /><strong>Principais benefícios:</strong><ul><li>Todas as extensões enviadas são classificadas alfabeticamente, não importa se eles estão ativadas, desativadas ou desinstaladas. A exceção: extensões quebradas.</li><li>As extensões quebradas são mostradas separadamente na mesma página do "Administrar Extensões" abaixo da lista de extensões normais. As razões de indisponibilidade são mostradas para cada extensão quebrada. Uma mensagem de aviso detalhada é adicionada àquelas razões quando a extensão quebrada é instalada ou alguns dados são salvos no banco de dados. Você pode clicar na linha de qualquer extensão quebrada para ver seus detalhes da mesma maneira que é aplicável a outras extensões.</li><li>Qualquer extensão (se não estiver quebrada) pode ser ativada com um único clique no botão mostrado à esquerda de seu nome na lista.</li></ul>'
	),
	array(
		0 => 'Por que eu preciso do módulo “Gerenciamento de arquivos ZIP”?',
		1 => 'Às vezes, você pode achar útil salvar arquivos das suas extensões ou compartilhá-los. Os arquivos podem ser versões antigas de extensões enviadas (que são compactadas automaticamente para segurança de dados), quaisquer pacotes que você tenha escolhido para salvar marcando o sinalizador “Salvar arquivo zip enviado” antes de um processo de envio ou qualquer arquivo zip de extensões que são armazenadas no diretório especificado (consulte a pergunta “Onde posso especificar o diretório para salvar arquivos zip de extensões?” abaixo). Você tem possibilidades de descompactar, baixar e excluir esses pacotes.'
	),
	array(
		0 => 'Como posso usar o módulo “Excluir extensões”?',
		1 => '“Excluir extensões” permite remover os arquivos das extensões desinstaladas do servidor para que você possa concluir a desinstalação completa sem usar o FTP. Quando você não precisa mais de uma extensão, você pode removê-la completamente do seu fórum. Para fazer isso, você precisa executar as seguintes etapas:<ul><li>Primeiro, verifique se você realmente não precisa de uma extensão específica. É recomendável fazer alguns backups dos arquivos e do banco de dados antes de qualquer remoção.</li><li>Em seguida, navegue até "Administrar Extensões do Upload Extensions", encontre a extensão que deseja excluir e verifique se ela está desativada : clique na alternância dessa extensão <em>se a alternância estiver verde</em>.</li><li>Verifique se os dados da extensão foram excluídos: <em>se o botão da lixeira dessa extensão for mostrado</em>, clique nele e confirme sua ação.</li><li>Depois disso, navegue até o módulo “Excluir extensões”, clique no link “Excluir extensão” mostrado na linha do seu ramal e confirme sua ação.</li></ul>'
	),
	array(
		0 => '--',
		1 => 'Uploading process'
	),
	array(
		0 => 'How can I upload validated extensions from the CDB on phpbb.com?',
		1 => 'On the main page of Upload Extensions click on the link “Show validated extensions”. Select the extension that you want to upload and click on the “Download” button in the row of that extension. Note: wordplay here: the extension will be <em>downloaded</em> from the remote resource and <em>uploaded</em> to your server.'
	),
	array(
		0 => 'How can I perform an upload from other remote resources?',
		1 => 'Copy the <strong>direct</strong> link to the extension’s zip package (if the link is not from the phpbb.com website, it should end with <code>.zip</code>) into the dedicated field of the form “Upload an extension” and click the “Upload” button.'
	),
	array(
		0 => 'How can I upload an extension from my local PC?',
		1 => 'To do that click on the “Browse...” button in the form “Upload an extension”, select the extension’s zip file on your computer, then click the “Upload” button.'
	),
	array(
		0 => 'I have copied the link to the extension’s zip package into the field and clicked the “Upload” button, but I see an error. What’s wrong with the link?',
		1 => 'To be able to upload the extension you should make sure that the following conditions are met:<ol><li>The link should be <strong>direct</strong>: for uploads from resources other than phpbb.com it should have <code>.zip</code> at the end.</li><li>The link should lead to the <strong>zip file</strong> of the extension, not to its description page.</li></ol>'
	),
	array(
		0 => 'What is the checksum? Where can I take it?',
		1 => 'Checksum is used to verify the integrity of the uploaded file. It is checked to make sure that the file on the remote server and the file uploaded to your server are the same. Checksum can be usually obtained from the same resource where the original file is stored.'
	),
	array(
		0 => '--',
		1 => 'Extensions Manager of Upload Extensions'
	),
	array(
		0 => 'How to use “Extensions Manager of Upload Extensions”?',
		1 => 'The status of each extension is displayed as a toggle.<ul><li>A green toggle means that the extension is enabled. When you click on a green toggle the extension will be <strong>disabled</strong>.</li><li>A red toggle means that the extension is disabled. When you click on a red toggle the extension will be <strong>enabled</strong>.</li><li>If the extension that has a red toggle is disabled but there is some extension’s data saved in the database, then you will have an option to delete its data by clicking on a trash bin near the toggle.<br /><em>Clicking on a trash bin is a way to uninstall the extension from the database. If you want to delete the files of the extension from the server, you will need to use Extension Cleaner tool.</em></li></ul><br />You can also re-check all versions of the extensions by clicking on the corresponding button or set up version check settings just like in standard “Extensions Manager”.'
	),
	array(
		0 => 'What about broken extensions? Can I uninstall them?',
		1 => 'Yes, sure! Broken extensions are displayed in “Extensions Manager of Upload Extensions” below the list of normal extensions. You can see the reasons why those extensions are broken and whether they have some data saved in your database. Click on a row of a broken extension to see its details and to manage it.'
	),
	array(
		0 => 'The toggle button of an extension is grey. Why?',
		1 => 'The grey toggle button means that you cannot perform any actions with that extension at the moment. Probably another action is already in progress. Also Upload Extensions cannot disable itself - that is why its button is also grey.'
	),
	array(
		0 => '--',
		1 => 'Extension details page'
	),
	array(
		0 => 'What information is shown for my extensions?',
		1 => 'Displayed information depends on several circumstances.<ul><li>General description provided by extension developers in the <code>composer.json</code> file (or warning message if the extension is broken).</li><li>The version number of the extension (if it is not broken).</li><li>The contents of the <code>README.md</code> file (if it exists in the extension’s directory).</li><li>The contents of the <code>CHANGELOG.md</code> file (if it exists in the extension’s directory).</li><li>Uploaded language packages for the extension.</li><li>The file tree for the extension and contents of its files.</li></ul>'
	),
	array(
		0 => 'What can I do with the extension on the details page?',
		1 => 'You are able to:<ul><li>Enable the extension if its toggle is red.</li><li>Disable the extension if its toggle is green.</li><li>Delete extension’s data from the database if the red trash bin button is shown.</li><li>Check out the status of the current version of the extension if the link to the version check file is provided by extension developers. If extension’s version is shown in a green bubble - the extension is up-to-date. If the bubble is red - the extension is not up-to-date. Otherwise - the version check information could not be obtained.</li><li>Receive an update for the extension if you see a cogwheel near the extension’s version bubble. Click on the cogwheel: if an “Update” button is shown - then you can click on it, confirm your action and Upload Extensions will update your extension. You can also see the release announcement by clicking on the corresponding button if the link is provided by extension developers. <strong>NOTE:</strong> if JavaScript is disabled in your browser, those buttons will be located inside the extension details section block.</li><li>Manage extension’s language packages. You can upload a new language package for the extension - see question “What language packages can I upload for an extension?” below. You can also delete some already installed language packages.</li><li>Download the extension’s package (see question “What is the purpose of the feature “Download packaged extension”?” below).</li></ul>'
	),
	array(
		0 => 'What language packages can I upload for an extension?',
		1 => 'You can upload any zip packages that contain language files for the extension if those packages have one of the following structures:<ul><li><code>ZIP_FILE_ROOT/language_files</code>, or</li><li><code>ZIP_FILE_ROOT/single_directory/language_files</code>, or</li><li><code>ZIP_FILE_ROOT/single_directory/language_ISO_code/language_files</code>.</li></ul><br />For more information about the uploading process see section “Uploading process” above.'
	),
	array(
		0 => 'What is the purpose of the feature “Download packaged extension”?',
		1 => 'Upload Extensions lets you download proper zip packages of any uploaded extensions on your board to your local PC. You can also tick a flag to delete the suffix of the development version - this action can help you, for example, to shorten the time for preparing the extension for the CDB. Navigate to the extension details page and click on the “Tools” section button. Then the “Download” button will be shown.'
	),
	array(
		0 => '--',
		1 => 'Gerenciamento de arquivos ZIP'
	),
	array(
		0 => 'Onde posso especificar o diretório para salvar arquivos zip de extensões?',
		1 => 'Navegue no ACP para <code>Geral -> Configuração do servidor -> Configurações do servidor -> Configurações de pasta -> Caminho de armazenamento dos pacotes zip das extensões</code>.'
	),
	array(
		0 => 'Como posso excluir pacotes zip de várias extensões de uma só vez?',
		1 => 'Em primeiro lugar, certifique-se de que você realmente precisa executar tal ação; Recomenda-se que você tenha feito backups necessários. Em seguida, navegue até o módulo "Gerenciamento de arquivos ZIP", marque os sinalizadores nas linhas de pacotes zip que você deseja excluir, clique no botão "Excluir selecionado" e confirme sua ação.'
	),
	array(
		0 => '--',
		1 => 'Ferramenta de Limpeza de Extensão'
	),
	array(
		0 => 'O que é a "ferramenta de Limpeza de Extensão"?',
		1 => '“Ferramenta de Limpeza de Extensão” é o nome do módulo “Excluir extensões” do Upload Extensions por vezes usado em sua documentação.'
	),
	array(
		0 => 'Uma extensão está instalada no meu fórum, mas não consigo excluí-la. Por quê?',
		1 => 'A extensão que você deseja remover deve ser desativada e seus dados devem ser excluídos do banco de dados antes de usar a "ferramenta de Limpeza de Extensão". Veja a pergunta “Como posso usar o módulo “Excluir extensões”?” Acima.'
	),
	array(
		0 => 'Como posso excluir várias extensões de uma só vez?',
		1 => 'Em primeiro lugar, certifique-se de que você realmente precisa executar tal ação; Recomenda-se que você tenha feito backups necessários. Em seguida, navegue até o módulo “Excluir extensões”, marque os sinalizadores nas linhas das extensões que você deseja excluir, clique no botão “Excluir selecionado” e confirme sua ação. <strong>Essas extensões não serão salvas como arquivos zip! Seus diretórios serão removidos do servidor inteiramente.</strong>'
	),
	array(
		0 => '--',
		1 => 'Interface interativa'
	),
	array(
		0 => 'Quais são os benefícios da funcionalidade JavaScript?',
		1 => 'As páginas são carregadas mais rapidamente, os elementos de design são alterados rapidamente quando você interage com eles, dicas de ferramentas são mostradas para ajudá-lo. Todos esses recursos economizam seu tempo e estão disponíveis somente se o JavaScript estiver ativado no seu navegador.'
	),
);
