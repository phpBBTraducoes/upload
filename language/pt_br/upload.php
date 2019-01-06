<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 - 2019 Igor Lavrov (https://github.com/LavIgor) and John Peskens (http://ForumHulp.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Brazilian Portuguese translation by eunaumtenhoid (c) 2019 [ver 3.2.0-RC] (https://github.com/phpBBTraducoes)
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPLOAD_EXT_TITLE'				=> 'Upload Extensions',
	'ACP_UPLOAD_EXT_CONFIG_TITLE'		=> 'Enviar extensões',
	'ACP_UPLOAD_EXT_DESCRIPTION'		=> 'Instale/atualize/exclua extensões, gerencie seus arquivos ZIP e muito mais sem usar o FTP.',
	'ACP_UPLOAD_EXT_TITLE_EXPLAIN'		=> 'Upload Extensions permite fazer o envio de arquivos zip de extensões ou excluir pastas de extensões do servidor.<br />Com essa extensão, você pode instalar/atualizar/excluir extensões sem usar o FTP. Se a extensão enviada já existir, ela será atualizada com os arquivos enviados.',
	'ACP_UPLOAD_EXT_HELP'				=> 'Upload Extensions: Guia de uso',
	'UPLOAD'							=> 'Enviar',
	'BROWSE'							=> 'Procurar...',
	'EXTENSION_UPLOAD'					=> 'Envie uma extensão',
	'EXTENSION_UPLOAD_EXPLAIN'			=> 'Aqui você pode enviar um pacote de extensão compactado contendo os arquivos necessários para realizar a instalação a partir do seu computador local ou de um servidor remoto. "Upload Extensions" tentará então descompactar o arquivo e deixá-lo pronto para instalação.<br />Escolha um arquivo ou digite um link nos campos abaixo.',
	'EXT_UPLOAD_ERROR'					=> 'A extensão não foi enviada.',
	'EXT_UPLOAD_INIT_FAIL'				=> 'Houve um erro ao inicializar o processo de envio da extensão.',
	'EXT_NOT_WRITABLE'					=> array(
		'error'		=> 'O diretório ext/ não é gravável. Isso é necessário para que "Upload Extensions" funcione corretamente.',
		'solution'	=> 'Por favor, ajuste suas permissões ou configurações e tente novamente.',
	),
	'EXT_TMP_NOT_WRITABLE'				=> array(
		'error'		=> 'O diretório ext/boardtools/upload/tmp/ não é gravável. Isso é necessário para que "Upload Extensions" funcione corretamente.',
		'solution'	=> 'Por favor, ajuste suas permissões ou configurações e tente novamente.',
	),
	'EXT_ALLOW_URL_FOPEN_DISABLED'		=> array(
			'error'		=> 'A configuração allow_url_fopen deve ser ativada para carregar informações de um recurso remoto.',
			'solution'	=> 'Por favor, confirme que a configuração allow_url_fopen está ativada no seu php.ini e tente novamente.',
	),
	'EXT_OPENSSL_DISABLED'				=> array(
			'error'		=> 'A extensão openssl deve estar ativada para carregar informações de um recurso https.',
			'solution'	=> 'Por favor, confirme que a extensão openssl está ativada no seu php.ini e tente novamente.',
	),
	'NO_UPLOAD_FILE'					=> array(
		'error'		=> 'Nenhum arquivo especificado ou ocorreu um erro durante o processo de envio.',
		'solution'	=> 'Por favor, confirme que você fez o envio do arquivo zip da extensão real e tente novamente.',
	),
	'NOT_AN_EXTENSION'					=> 'O arquivo zip enviado não é uma extensão do phpBB. O arquivo não foi salvo no servidor.',
	'EXT_ACTION_ERROR'					=> 'A ação solicitada não pode ser executada para a extensão phpBB selecionada.<br />Nota: “Upload Extensions” pode ser gerenciado somente através do Gerenciador de extensões padrão.',

	'SOURCE'							=> 'Fonte',
	'EXTENSION_UPDATE_NO_LINK'			=> 'Link de download não é fornecido.',
	'EXTENSION_TO_BE_ENABLED'			=> 'Upload Extensions será desativado durante o processo de atualização e ativado novamente após a atualização.',
	'EXTENSION_UPLOAD_UPDATE'			=> 'Atualize a extensão',
	'EXTENSION_UPLOAD_UPDATE_EXPLAIN'	=> '“Upload Extensions” irá realizar o envio a partir do link mostrado abaixo.',

	'EXTENSION_UPLOADED'				=> 'A extensão “%s” foi enviada com sucesso.',
	'EXTENSIONS_AVAILABLE'				=> 'Extensões desinstaladas',
	'EXTENSIONS_UPLOADED'				=> 'Extensões enviadas',
	'EXTENSIONS_UNAVAILABLE'			=> 'Extensões quebradas',
	'EXTENSIONS_UNAVAILABLE_EXPLAIN'	=> 'As extensões listadas abaixo são enviadas para o seu fórum, mas elas são quebradas devido a alguns motivos e é por isso que elas estão indisponíveis e não podem ser ativadas em seu fórum. Por favor, verifique os arquivos corretos e use a ferramenta Limpeza de Extensão se você quiser excluir os arquivos de extensões quebradas do servidor.',
	'EXTENSION_BROKEN'					=> 'Extensão quebrada',
	'EXTENSION_BROKEN_ENABLED'			=> 'Esta extensão quebrada está ativada!',
	'EXTENSION_BROKEN_DISABLED'			=> 'Esta extensão quebrada está desativada!',
	'EXTENSION_BROKEN_TITLE'			=> 'Esta extensão está quebrada',
	'EXTENSION_BROKEN_DETAILS'			=> 'Clique aqui para ver os detalhes.',
	'EXTENSION_BROKEN_EXPLAIN'			=> '<strong>Alguns dados dessa extensão ainda estão salvos no servidor.</strong> Por favor, confira por que esta extensão está quebrada. Pode ser necessário pedir ajuda aos desenvolvedores de extensões e usar o FTP para alterar alguns arquivos (ou você pode fazer o envio de uma versão com correções). Em seguida, você poderá administrar a extensão novamente.<br /><h3> O que você pode fazer:</h3><br /><strong>Atualize a extensão quebrada.</strong><br /><ul><li>Verifique se a extensão está desativada (clique na opção de alternar, se necessário).</li><li>Descubra se uma nova versão da extensão está disponível. Tente enviá-lo.</li><li>Se o problema não for resolvido, você pode pedir ajuda aos desenvolvedores da extensão.</ul><strong>ou</strong><br /><br /><strong>Remova totalmente a extensão quebrada.</strong><br /><ul><li>Verifique se a extensão está desabilitada (clique na chave se necessário).</li><li>Verifique se a extensão os dados da extensão são excluídos (clique no botão da lixeira, se necessário).</li><li>Remova os arquivos da extensão usando a ferramenta Limpeza de Extensão.</ul>',

	'EXTENSION_UPLOADED_ENABLE'			=> 'Ativar a extensão enviada',
	'ACP_UPLOAD_EXT_UNPACK'				=> 'Descompacte a extensão',
	'ACP_UPLOAD_EXT_CONT'				=> 'Conteúdo do pacote “%s”',

	'EXT_LIST_DOWNLOAD'					=> 'Baixar lista completa',
	'EXT_LIST_DOWNLOAD_ENGLISH'			=> 'Use nomes de status em inglês',
	'EXT_LIST_DOWNLOAD_GROUP'			=> 'Agrupar por',
	'EXT_LIST_DOWNLOAD_GROUP_STANDARD'	=> 'enviado/quebrado',
	'EXT_LIST_DOWNLOAD_GROUP_DISABLED'	=> 'ativado/desativado/quebrado',
	'EXT_LIST_DOWNLOAD_GROUP_PURGED'	=> 'ativado/desativado/desinstalado/quebrado',
	'EXT_LIST_DOWNLOAD_SHOW'			=> 'Incluir nomes',
	'EXT_LIST_DOWNLOAD_SHOW_FULL'		=> 'exibir nomes e nomes limpos',
	'EXT_LIST_DOWNLOAD_SHOW_CLEAN'		=> 'somente nomes limpos',
	'EXT_LIST_DOWNLOAD_SHOW_NAME'		=> 'exibir somente nomes',
	'EXT_LIST_DOWNLOAD_TITLE'			=> 'Lista completa de extensões enviadas',
	'EXT_LIST_DOWNLOAD_FOOTER'			=> 'Gerado por Upload Extensions',

	'EXT_ROW_ENABLED'					=> 'ativado',
	'EXT_ROW_DISABLED'					=> 'desativado',
	'EXT_ROW_UNINSTALLED'				=> 'desinstalado',
	'EXT_ROWS_ENABLED'					=> 'Ativado:',
	'EXT_ROWS_DISABLED'					=> 'Desativado:',
	'EXT_ROWS_UNINSTALLED'				=> 'Desinstalado:',
	'EXT_ROWS_UPLOADED'					=> 'Enviado:',
	'EXT_ROWS_BROKEN'					=> 'Quebrado:',

	'EXTENSION_DELETE'					=> 'Excluir extensão',
	'EXTENSION_DELETE_CONFIRM'			=> 'Você tem certeza que deseja excluir a extensão “%s”?',
	'EXTENSIONS_DELETE_CONFIRM'			=> array(
		2	=> 'Você tem certeza que deseja excluir essas extensões <strong>%1$s</strong>?',
	),
	'EXT_DELETE_SUCCESS'				=> 'A extensão foi excluida com sucesso.',
	'EXTS_DELETE_SUCCESS'				=> 'As extensões foram excluidas com sucesso.',
	'EXT_DELETE_ERROR'					=> 'Nenhum arquivo especificado ou houve um erro durante a exclusão.',
	'EXT_DELETE_NO_FILE'				=> 'Nenhum arquivo foi especificado para a exclusão.',
	'EXT_CANNOT_BE_PURGED'				=> 'Os dados da extensão ativada não podem ser removidos. Desative a extensão para poder limpar seus dados.',

	'EXTENSION_ZIP_DELETE'				=> 'Excluir arquivo zip',
	'EXTENSION_ZIP_DELETE_CONFIRM'		=> 'Você tem certeza que deseja excluir o arquivo zip “%s”?',
	'EXTENSIONS_ZIP_DELETE_CONFIRM'		=> array(
		2	=> 'Você tem certeza que deseja excluir os arquivos zip <strong>%1$s</strong>?',
	),
	'EXT_ZIP_DELETE_SUCCESS'			=> 'O arquivo zip da extensão foi excluido com sucesso.',
	'EXT_ZIPS_DELETE_SUCCESS'			=> 'Os arquivos zip das extensões foram excluidos com sucesso.',
	'EXT_ZIP_DELETE_ERROR'				=> 'Nenhum arquivo especificado ou houve um erro durante a exclusão.',

	'ACP_UPLOAD_EXT_ERROR_DEST'			=> 'Nenhum fornecedor ou pasta de destino no arquivo zip enviado. O arquivo não foi salvo no servidor.',
	'ACP_UPLOAD_EXT_ERROR_COMP'			=> 'composer.json não foi encontrado no arquivo zip enviado. O arquivo não foi salvo no servidor.',
	'ACP_UPLOAD_EXT_ERROR_NOT_SAVED'	=> 'O arquivo não foi salvo no servidor.',
	'ACP_UPLOAD_EXT_ERROR_TRY_SELF'		=> '“Upload Extensions” pode ser atualizado apenas pelo Atualizador do Upload Extensions ou pelo FTP.',
	'ACP_UPLOAD_EXT_WRONG_RESTORE'		=> 'Ocorreu um erro durante a atualização de uma extensão instalada. Tente atualizá-lo novamente.',

	'DEVELOPER'							=> 'Desenvolvedor',
	'DEVELOPERS'						=> 'Desenvolvedores',

	'EXT_UPLOAD_SAVE_ZIP'				=> 'Salvar arquivo zip enviado',
	'CHECKSUM'							=> 'Soma de verificação',
	'RESTORE'							=> 'Restaurar',
	'ZIP_UPLOADED'						=> 'Pacotes zip de extensões enviados',
	'EXT_ENABLE'						=> 'Ativar',
	'EXT_ENABLE_DISABLE'				=> 'Ativar/Desativar a extensão',
	'EXT_ENABLED'						=> 'A extensão foi ativada com sucesso.',
	'EXT_DISABLED'						=> 'A extensão foi desativada com sucesso.',
	'EXT_PURGE'							=> 'Excluir os dados da extensão',
	'EXT_PURGED'						=> 'Os dados da extensão foram excluidos com sucesso.',
	'EXT_UPLOADED'						=> 'O envio foi bem sucedido.',
	'EXT_UPDATE_ENABLE'					=> 'Clique no botão para ativar a extensão.',
	'EXT_UPDATE_CHECK_FILETREE'			=> 'Por favor, verifique a árvore de arquivos da extensão.',
	'EXT_UPDATE_ERROR'					=> 'O processo de atualização foi incorreto.',
	'EXT_UPDATE_TIMEOUT'				=> 'O processo de atualização expirou.',
	'EXT_UPDATES_AVAILABLE'				=> 'Atualizações estão disponíveis',
	'EXT_UPDATE_METHODS_TITLE'			=> 'Métodos de atualização disponíveis',
	'EXT_UPLOAD_UPDATE_METHODS'			=> 'Você pode atualizar a extensão realizando uma das ações possíveis:<ul><li><strong>Método do atualizador.</strong> As extensões de upload podem ser atualizadas com o Atualizador do Upload Extensions. Verifique se esta ferramenta já está disponível. A menos que você tenha essa ferramenta, será necessário usar o segundo método.</li><li><strong>Método FTP.</strong>O Upload Extensions pode ser atualizado de maneira padrão. Baixe os novos arquivos para o seu PC (clique no botão abaixo), desative a extensão no Gerenciador de Extensões padrão, copie os novos arquivos usando um cliente FTP e ative a extensão no Gerenciador de Extensões padrão.</li></ul>',
	'EXT_UPDATED'						=> 'A atualização foi bem sucedida.',
	'EXT_UPDATED_LATEST_VERSION'		=> 'atualizado para a versão mais recente',
	'EXT_SAVED_OLD_ZIP'					=> '<strong>NOTA:</strong> a versão anterior da extensão foi salva no arquivo <strong>%s</strong> no seu servidor. Confira o módulo "Gerenciamento de arquivos ZIP".',
	'EXT_RESTORE_LANGUAGE'				=> '<strong>Um diretório de idioma está ausente na versão enviada da extensão.</strong> Você pode restaurar o diretório %s do arquivo zip salvo da versão anterior. Em seguida, você pode precisar atualizar os arquivos desse diretório para compatibilidade com a versão enviada da extensão.',
	'EXT_RESTORE_LANGUAGES'				=> '<strong>Alguns diretórios de idiomas estão ausentes na versão da extensão enviada.</strong> Você pode restaurar os diretórios %1$s e %2$s do arquivo zip salvo da versão anterior. Em seguida, você pode precisar atualizar os arquivos desses diretórios para compatibilidade com a versão enviada da extensão.',
	'EXT_LANGUAGES_RESTORED'			=> 'O processo de restauração foi concluído com sucesso.',
	'EXT_SHOW_DESCRIPTION'				=> 'Mostrar descrição da extensão',
	'EXT_UPLOAD_BACK'					=> '« Voltar para Upload Extensions',
	'EXT_RELOAD_PAGE'					=> 'Recarregue a página', 
	'EXT_REFRESH_PAGE'					=> 'Atualize a página',
	'EXT_REFRESH_NOTICE'				=> 'O menu de navegação pode estar desatualizado.',

	'ERROR_COPY_FILE'					=> 'A tentativa de copiar o arquivo “%1$s” para o local “%2$s” falhou.',
	'ERROR_CREATE_DIRECTORY'			=> 'A tentativa de criar o diretório “%s” falhou.',
	'ERROR_REMOVE_DIRECTORY'			=> 'A tentativa de remover o diretório “%s” falhou.',
	'ERROR_CHECKSUM_MISMATCH'			=> 'O %s-hash do arquivo enviado difere da soma de verificação fornecida. O arquivo não foi salvo no servidor.',
	'ERROR_ZIP_NO_COMPOSER'				=> 'composer.json não foi encontrado no pacote zip solicitado.',
	'ERROR_DIRECTORIES_NOT_RESTORED'	=> 'O processo de restauração não pôde ser concluído devido a erros.',
	'ERROR_LANGUAGE_UNKNOWN_STRUCTURE'	=> 'A estrutura do pacote de idiomas enviado não é reconhecida. O arquivo não foi salvo no servidor.',
	'ERROR_LANGUAGE_NO_EXTENSION'		=> 'O nome da extensão não está especificado para o pacote de idiomas.',
	'ERROR_LANGUAGE_NOT_DEFINED'		=> 'O código ISO do idioma deve ser definido para o envio correto do pacote de idiomas. Por favor, preencha o campo obrigatório do formulário e tente novamente.',

	'ACP_UPLOAD_EXT_DIR'				=> 'Caminho de armazenamento dos pacotes zip das extensões',
	'ACP_UPLOAD_EXT_DIR_EXPLAIN'		=> 'Caminho sob o diretório raiz do phpBB, por exemplo <samp>ext</samp>.<br />Você pode alterar este caminho para armazenar pacotes zip em uma pasta especial (por exemplo, se quiser permitir que os usuários baixem esses arquivos, você poderá alterá-lo para <em>downloads</em>, e se você quiser proibir esses downloads, você pode alterá-lo para o caminho que é superior a um nível que a raiz http do seu site (ou você pode criar uma pasta com o arquivo .htaccess apropriado)).',

	'ACP_UPLOAD_EXT_UPDATED'			=> 'A extensão instalada foi atualizada.',
	'ACP_UPLOAD_EXT_UPDATED_EXPLAIN'	=> 'Você fez o envio de um arquivo zip para uma extensão já instalada. Essa extensão <strong>foi desativada automaticamente</strong> para tornar o processo de atualização mais seguro. Agora, por favor <strong>verifique</strong> se os arquivos enviados estão corretos e <strong>ative</strong> a extensão se ela ainda deve ser usada no fórum.',

	'ACP_UPLOAD_EXT_NO_CHECKSUM_TITLE'	=> 'Nenhuma soma de verificação foi fornecida para o arquivo enviado.',
	'ACP_UPLOAD_EXT_NO_CHECKSUM'		=> 'Upload Extensions não pode executar as verificações de segurança porque a soma de verificação <strong>não foi fornecida</strong> para o arquivo zip enviado. A soma de verificação é usada para garantir que o arquivo enviado não esteja corrompido e não seja comprometido.',

	'VALID_PHPBB_EXTENSIONS'			=> 'Extensões validadas',
	'SHOW_VALID_PHPBB_EXTENSIONS'		=> 'Mostrar extensões validadas',
	'VALID_PHPBB_EXTENSIONS_TITLE'		=> 'Você pode baixar extensões validadas do CDB em phpbb.com ou verificar suas homepages.',
	'VALID_PHPBB_EXTENSIONS_EMPTY_LIST'	=> 'Nenhuma extensão está sendo sugerida no momento. Por favor, confira as atualizações para as extensões de upload.',
	'POSSIBLE_SOLUTIONS'				=> 'Soluções possíveis',

	'ACP_UPLOAD_EXT_MANAGER_EXPLAIN'	=> 'O Administrador de Extensões do Upload Extensions é uma ferramenta no seu Fórum phpBB que permite gerenciar todas as suas extensões e visualizar informações sobre elas.',
	'ACP_UPLOAD_ZIP_TITLE'				=> 'Gerenciamento de arquivos ZIP',
	'ACP_UPLOAD_UNINSTALLED_TITLE'		=> 'Excluir extensões',

	'EXT_DETAILS_README'				=> 'Leiame',
	'EXT_DETAILS_CHANGELOG'				=> 'Changelog',
	'EXT_DETAILS_LANGUAGES'				=> 'Idiomas',
	'EXT_DETAILS_FILETREE'				=> 'Árvore de arquivos',
	'EXT_DETAILS_TOOLS'					=> 'Ferramentas',

	'DEFAULT'							=> 'padrão',
	'EXT_LANGUAGE_ISO_CODE'				=> 'Código ISO',
	'EXT_LANGUAGES'						=> 'Pacotes de idiomas enviados',
	'EXT_LANGUAGES_UPLOAD'				=> 'Envie um pacote de idioma',
	'EXT_LANGUAGES_UPLOAD_EXPLAIN'		=> 'Aqui você pode fazer o envio de um pacote compactado contendo os arquivos de idioma necessários para essa extensão em seu computador local ou em um servidor remoto. "Upload Extensions" tentará descompactar os arquivos e movê-los para o local correto.<br />Escolha um arquivo ou digite um link nos campos abaixo.<br />Não se esqueça de especificar o código ISO do idioma no campo correspondente abaixo (exemplo: <strong>en</strong>).<br /><strong>IMPORTANTE!</strong> O diretório de idiomas da sua extensão atual com esse código ISO será excluído se existir, <strong>nenhum arquivo zip será criado para ele</strong>.',
	'EXT_LANGUAGE_UPLOADED'				=> 'O pacote de idioma “%s” foi enviado com sucesso.',
	'EXT_LANGUAGE_DELETE_CONFIRM'		=> 'Você tem certeza que deseja excluir o pacote de idioma “%s”?',
	'EXT_LANGUAGES_DELETE_CONFIRM'		=> array(
		2	=> 'Você tem certeza que deseja excluir os pacotes de idiomas <strong>%1$s</strong>?',
	),
	'EXT_LANGUAGE_DELETE_SUCCESS'		=> 'O pacote de idioma da extensão foi excluido com sucesso.',
	'EXT_LANGUAGES_DELETE_SUCCESS'		=> 'Os pacotes de idiomas da extensão foram excluidos com sucesso.',
	'EXT_LANGUAGE_DELETE_ERROR'			=> 'Nenhum arquivo especificado ou houve um erro durante a exclusão.',

	'EXT_TOOLS_DOWNLOAD_TITLE'			=> 'Baixe a extensão compactada',
	'EXT_TOOLS_DOWNLOAD'				=> 'Você pode baixar um arquivo ZIP adequadamente compactado da extensão para o seu PC. Você também pode optar por excluir o sufixo da versão de desenvolvimento (por exemplo, para reduzir o tempo de preparação da extensão para o CDB).',
	'EXT_TOOLS_DOWNLOAD_DELETE_SUFFIX'	=> 'Exclua o sufixo de desenvolvimento, se existir',
	'EXT_DOWNLOAD_ERROR'				=> 'A tentativa de baixar a extensão “%s” falhou.',

	'EXT_LOAD_ERROR'					=> 'Carregado com erro',
	'EXT_LOAD_TIMEOUT'					=> 'O carregamento atingiu o tempo limite',
	'EXT_LOAD_ERROR_EXPLAIN'			=> 'Ocorreu um erro durante o processo de carregamento.',
	'EXT_LOAD_ERROR_SHOW'				=> 'Mostrar erros ocorridos',
	'EXT_LOAD_SOLUTIONS'				=> 'Por favor, verifique os arquivos de log de erros no seu servidor, elimine o problema e tente novamente.',

	'UPLOAD_DESCRIPTION_UPLOAD'			=> 'Enviar extensões do phpBB',
	'UPLOAD_DESCRIPTION_UPLOAD_CDB'		=> 'CDB em phpbb.com',
	'UPLOAD_DESCRIPTION_UPLOAD_LOCAL'	=> 'PC local',
	'UPLOAD_DESCRIPTION_UPLOAD_REMOTE'	=> 'Servidor remoto',
	'UPLOAD_DESCRIPTION_UPDATE'			=> 'Atualizar extensões do phpBB',
	'UPLOAD_DESCRIPTION_UPDATE_ABOUT'	=> 'Você pode atualizar qualquer uma das extensões já enviadas. A extensão que você deseja atualizar será desativada automaticamente para que as atualizações sejam seguras.',
	'UPLOAD_DESCRIPTION_MANAGE'			=> 'Administrar extensões do phpBB',
	'UPLOAD_DESCRIPTION_MANAGE_ACTIONS'	=> 'Instalar/desinstalar quaisquer extensões',
	'UPLOAD_DESCRIPTION_MANAGE_LANG'	=> 'Enviar e gerenciar pacotes de idiomas de extensões',
	'UPLOAD_DESCRIPTION_MANAGE_DETAILS'	=> 'Ver os detalhes e as árvores de arquivos',
	'UPLOAD_DESCRIPTION_DESIGN'			=> 'Interface interativa',
	'UPLOAD_DESCRIPTION_DESIGN_ABOUT'	=> 'Você pode executar ações mais rapidamente por causa da funcionalidade JavaScript. Mensagens coloridas e dicas de ferramentas ajudarão você a tomar decisões corretas.',
	'UPLOAD_DESCRIPTION_ZIP'			=> 'Gerenciamento de arquivos ZIP',
	'UPLOAD_DESCRIPTION_ZIP_SAVE'		=> 'Salvar zips em um diretório de sua escolha',
	'UPLOAD_DESCRIPTION_ZIP_UNPACK'		=> 'Descompactar um arquivo zip para instalar uma extensão',
	'UPLOAD_DESCRIPTION_ZIP_DOWNLOAD'	=> 'Baixar pacotes zip adequados de extensões',
	'UPLOAD_DESCRIPTION_CLEANER'		=> 'Ferramenta de limpeza de extensão',
	'UPLOAD_DESCRIPTION_CLEANER_ABOUT'	=> 'Você pode excluir diretórios de extensão ou arquivos zip de extensões do servidor.',
));
