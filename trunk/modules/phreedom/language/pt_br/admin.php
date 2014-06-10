<?php
// +-----------------------------------------------------------------+
// Arquivo Tradução Idioma  Phreedom
// Generated: 2013-10-22 05:28:46
// Module/Method: phreedom
// ISO Language: pt_br
// Version: 3.6
// +-----------------------------------------------------------------+
// Path: /modules/phreedom/language/pt_br/admin.php

define('INV_IMAGE_FILE_TYPE_ERROR','Erro ao subir arquivo de imagem. Formato não aceitável.');
define('INV_IMAGE_FILE_WRITE_ERROR','Houve um problema ao gravar o arquivo de imagem na pasta especificada.');
define('GEN_ADM_TOOLS_SEQ_DESC','Alterações na sequência podem ser feitas aqui.<br />ATENÇÃO 1: PhreeBooks não permite sequências duplicadas, certifique-se que a nova sequência não conflite com os valores já lançados.<br />ATENÇÃO 2: O próximo número de depósito pe gerado pelo sistema e utiliza a data corrente.<br />ATENÇÃO 3: o próximo número de cheuqe pode ser digitado na tela de pagamento antes de lançar um pagamento e será sequenciado a partir do número lançado.');
define('INV_IMAGE_PATH_ERROR','EErro no caminho especificado para carregar a imagem!');
define('INV_CANNOT_DELETE_SYSTEM','Campos da categoria Sistema não podem ser removidos!');
define('INV_CATEGORY_CANNOT_DELETE','Não é possível remover a categoria. Está em uso pelo campo: ');
define('INV_FIELD_NAME_RULES','Nomes de campos não podem conter espaços ou caracteres especiais e podem ter no máximo 64 caracteres.');
define('INV_LABEL_TIME_STAMP_VALUE','Campo do Sistema para rastrear a última data e hora <br> em que foi feita uma alteração em item específico do inventário.');
define('TEXT_TIME_STAMP','Carimbo Tempo');
define('TEXT_DATE_AND_TIME','Fata e Hora');
define('TEXT_CHECK_BOX_FIELD','Check Box <br>(Sim ou Nãoe)');
define('INV_LABEL_RADIO_EXPLANATION','Entre as opções separadas por vírgulas como:<br />valor1:desc1:def1,valor2:desc2:def2<br /><u>chave:</u><br />valor = O valor a ser registrado na base de dados<br />desc = Descrição textual da opção<br />def = Padrão 0 or 1, 1 é a opção padrão<br />Nota: Somente um padrão é permitido por lista');
define('TEXT_RADIO_BUTTON','Radio Button');
define('INV_LABEL_MULTI_SELECT_FIELD','Checkboxes Múltiplas Opções');
define('TEXT_DECIMAL_NUMBER','Número Decimal');
define('TEXT_DECIMAL_RANGE','Intervalo Decimal');
define('INV_LABEL_DEFAULT_DISPLAY_VALUE','Formato Apresentação (Máx. Decimal)');
define('INV_LABEL_DROP_DOWN_FIELD','Lista Dropdown');
define('TEXT_INTEGER_RANGE','Intervalo Inteiro');
define('INV_LABEL_INTEGER_FIELD','Número Inteiro');
define('INV_LABEL_INVENTORY_LINK','Link Inventário <br>(Link apontando para outro item de Inventário (URL))');
define('TEXT_IMAGE_FILE_NAME','Nome Arquivo Imagem');
define('TEXT_HTML_TEXT_FIELD','Código HTML');
define('INV_LABEL_HYPERLINK','Hyper-Link');
define('TEXT_TEXT_FIELD','Campo Texto');
define('TEXT_FOR_LENGTHS_LESS_THAN_256_CHARACTERS','para tamanhos menores que 256 Caracteres');
define('INV_LABEL_CHOICES','Entre String Seleção');
define('INV_LABEL_FIXED_255_CHARS','Fixo em no máximo 255 Caracteres');
define('TEXT_DEFAULT_VALUE','Valor Padrão');
define('INV_LABEL_MAX_NUM_CHARS','Número Máximo de Caracteres (tamanho)');
define('ASSETS_FIELD_DELETE_INTRO','em certeza de que quer remover este campo de ativo?');
define('EXTRA_FIELDS_ERROR_NO_TABS','Não há abas customizadas, por favor insira ao menos uma aba antes de inserir campos.');
define('ASSETS_FIELD_RESERVED_WORD','O nome de campo digitado é uma palavra reservada do MySQL, por favor entre um novo nome!');
define('ASSETS_ERROR_FIELD_DUPLICATE','O nome de campo digitado já está em uso, por favor entre um novo nome\"');
define('EXTRA_TABS_LOG','Abas Ativos (%s)');
define('TEXT_TAB_MEMBER','Membor Aba');
define('INV_FIELD_NAME','Nome Campo:');
define('ASSETS_ERROR_FIELD_BLANK','O nome do campo de ativo está em branco, por favor entre um nome de campo e verifique todas as entradas neste formulário!');
define('EXTRA_FIELDS_LOG','Campos Extra (%s)');
define('EXTRA_TABS_DELETE_ERROR','Este nome de já existe, por favor utilize outro nome.');
define('EXTRA_TABS_DELETE_INTRO','Tem certeza de que quer remover esta aba?\\nAbas não podem ser removidas se há um campo dentro dela.');
define('TEXT_NEW_FIELD','Novo Campo');
define('INV_INFO_HEADING_EDIT_CATEGORY','Alterar Aba');
define('TEXT_TAB_INSERT_INTRO','Por favor, entre a nova aba com suas propriedades');



define('SETUP_CO_MGR_NO_SELECTION','Nenhuma empresa foi selecionada para remoção!');
define('SETUP_CO_MGR_JS_DELETE_CONFIRM','Tem certeza de que quer remover esta empresa?');
define('SETUP_CO_MGR_SELECT_DELETE','Selecione a empresa para remover: ');
define('SETUP_CO_MGR_DELETE_CONFIRM','ATENÇÃO: ESTA AÇÃO VAI REMOVAR A BASE DE DADOS E TODOS OS ARQUIVOS ESPECÍFICOS DA EMPRESA. TODA A INFORMAÇÃO SERÁ PERDIDA!');
define('SETUP_CO_MGR_LOG','Empresa - ');
define('SETUP_CO_MGR_DELETE_SUCCESS','A empresa foi removida com sucesso!');
define('SETUP_CO_MGR_CREATE_SUCCESS','Nova empresa criada com sucesso');
define('SETUP_CO_MGR_ERROR_1','Erro criando tabelas Base Dados.');
define('SETUP_CO_MGR_CANNOT_CONNECT','Erro conectando à nova Base Dados. Verifique o usuário e a senha.');
define('SETUP_CO_MGR_DUP_DB_NAME','Erro - O nome da Base Dados não pode ser o mesmo que a Base Dados corrente!');
define('SETUP_CO_MGR_ERROR_EMPTY_FIELD','Nome Base Dados e nome empresa não podem ser brancos!');
define('SETUP_CO_MGR_MOD_SELECT','Por favor, selecione os módulos para copiar/criar e dados para copiar. Para criar uma nova empresa, selecione Dados Básicos ou Dados Demo:');
define('TEXT_COMPANY_FULL_NAME','Empresa Nome Completo ');
define('TEXT_DATABASE_USER_NAME','Database Usuário ');
define('TEXT_DATABASE_PASSWORD','Database Senha ');
define('TEXT_DATABASE_NAME','Base Dados Nome ');
define('TEXT_DATABASE_SERVER','Base Dados Servidor ');
define('TEXT_ALL_DATA','Todos os Dados');
define('TEXT_DEMO_DATA','Dados Demo');
define('SETUP_CO_MGR_COPY_HDR','Entre a informatção base de dados para a nova empresa. (Precisa se adequar às convenções mysql, tipicamente 8-12 caracteres alfanuméricos) Este nome é usado como nome base de dados e será acrescentado ao diretório para conter dados específicos da empresa. A base de dados deve ser criada antes da criação da empresa.');
define('TEXT_DELETE_COMPANY','Remover Empresa');
define('TEXT_BASIC_DATA','Dados Básicos');
define('SETUP_CO_MGR_COPY_CO','Nova/Cópia Empresa');
define('GEN_BACKUP_DOWNLOAD_EMPTY','O arquivo de download não contém nenhuma informação!');
define('TEXT_ERROR_ZIP_FILE','O arquivo zip não pode ser criado. Verifique as permissões do diretório: ');
define('GEN_BACKUP_NO_ZIP_CLASS','A classe zip não foi encontrada. PHP precisa da biblioteca zip instalada para fazer o backup com compressão tipo zip.');
define('GEN_BACKUP_SAVE_LOCAL',' Salvar uma cópia local no servidor web no diretório(my_files/backups)');
define('GEN_BACKUP_WARNING','Atenção! Esta operação vai remover e reescrever a base de dados. Tem certeza de que quer fazer isto?');
define('TEXT_DATABASE_ONLY',' Somente Base Dados');
define('GEN_BACKUP_FULL',' Base Dados e Arquivos Informação Empresa');
define('GEN_COMP_BZ2',' bz2 (Linux)');
define('TEXT_COMPRESSION_ZIP',' Zip');
define('GEN_COMP_NONE','Nenhum (Somente Base Dados)');
define('GEN_BACKUP_GEN_INFO','Por favor selecione a tipo de compressão de backup abaixo.');
define('TEXT_COMPRESSION_TYPE','Tipo Compressão');
define('TEXT_COMPANY_RESTORE','Restaurar Empresa');
define('TEXT_START_BACKUP','Iniciar Backup');
define('GEN_ADM_TOOLS_ENCRYPT_PW_CONFIRM','Redigite Nova Chave Criptografia');
define('ERROR_OLD_ENCRYPT_NOT_CORRECT','Nova Chave Criptografia não confere com o valor armazenado!');
define('GEN_ADM_TOOLS_ENCRYPT_PW','Nova Chave Criptografia');
define('TEXT_OLD_ENCRYPTION_KEY','Chave Criptografia Anterior');
define('GEN_ADM_TOOLS_SET_ENCRYPTION_PW_DESC','Utilizar a chave de criptografia se \'Criptografia Habilitada\' estiver ligado. Se for a primeira vez, a chave de criptografia anterior é branco.');
define('GEN_ENCRYPTION_KEY_CHANGED','A chave de criptografia foi alterada.');
define('TEXT_CREATE_OR_CHANGE_ENCRYPTION_KEY','Criar/Alterar chave de criptografia');
define('GEN_ENCRYPTION_COMP_TYPE','Entre a chave de criptografia utilizada para armazenar informação segura.');
define('TEXT_ENCRYPTION_KEY','Chave criptografia ');
define('TEXT_ENCRYPTION_KEY_CONFIRM','Digite novamente a chave ');
define('TEXT_ERROR_ENCRYPTION_KEY_MATCH','As chaves de criptografia não são iguais!');
define('TEXT_ERROR_WRONG_ENCRYPTION_KEY','Você entrou uma chave de criptografia mas ela não confere com a chave armazenada.');
define('GEN_ENCRYPTION_KEY_SET','A chave de criptografia foi estabelecida.');
define('GEN_ENCRYPTION_GEN_INFO','Serviços de criptografia dependem de uma chave utilizada para critografar informação na base de dados. NÃO PERCA A CHAVE, de outro modo a informação não poderá ser descriptografada!');
define('GEN_ADM_TOOLS_SET_ENCRYPTION_KEY','Entrar Chave Criptografia');
define('BOX_HEADING_ENCRYPTION','Serviços Criptografia Informação');
define('SETUP_LOG_CURRENCY','Moedas - ');
define('TEXT_SAVE_CHANGES','Salvar Alterações');
define('SETUP_WARN_PRIMARY_SERVER_FAILED','Atenção: O servidor primário de taxas de câmbio (%s) falhou por %s (%s) - tentando o servidor secundário.');
define('SETUP_ERROR_CURRENCY_INVALID','Erro: A taxa de câmbio para %s (%s) não foi atualizada via %s. Este é um código de moeda válido?');
define('SETUP_ERROR_CANNOT_CHANGE_DEFAULT','A moeda padrão não pode ser alterada depois de feitos lançamentos no sistema!');
define('SETUP_INFO_CURRENCY_UPDATED','A taxa de câmbio para %s (%s) foi atualizada com sucesso via %s.');
define('SETUP_INFO_SET_AS_DEFAULT','Estabelecer como padrão (requer a atualização manual de valores)');
define('SETUP_INFO_HEADING_EDIT_CURRENCY','Alterar Moeda');
define('SETUP_INFO_HEADING_NEW_CURRENCY','Nova Moeda');
define('SETUP_CURR_DELETE_INTRO','Tem certeza de que quer remover esta moeda?');
define('SETUP_CURR_INSERT_INTRO','Por favor, entre a nova moeda com sua data correspondente');
define('TEXT_VALUE','Valor');
define('SETUP_INFO_CURRENCY_DECIMAL_PRECISE','Precisão Decimal; Para uso com preços unitários e quantidades com mais precisão do que valores monetários. Este valor é tipicamente utilizado para estabelecer o número de casas decimais:');
define('TEXT_DECIMAL_PLACES','Casas Decimais');
define('SETUP_INFO_CURRENCY_THOUSANDS_POINT','Marcador Milhar:');
define('SETUP_INFO_CURRENCY_SYMBOL_LEFT','Símbolo Esquerda:');
define('SETUP_INFO_CURRENCY_SYMBOL_RIGHT','Símbolo Direita:');
define('TEXT_DECIMAL_POINT','Marcador Decimal');
define('TEXT_TITLE','Título:');
define('SETUP_UPDATE_EXC_RATE','Atualizar Taxa Câmbio');
define('SETUP_CURR_EDIT_INTRO','Por favor faça as mudanças necessárias');
define('TEXT_CURRENCY','CMoeda');
define('TEXT_CURRENCY_CODE','CMoeda Código');
define('CD_12_74_DESC','Que conversões de moeda você precisa para emails de texto? (Padrão = &amp;pound;,£:&amp;euro;,€)');
define('TEXT_CURRENCIES','Moedas');
define('CD_12_72_DESC','Entre o nome DNS de seu servidor SMTP.mail.mydomain.com ou 55.66.77.88 (Só é necessária se estiver utilizando Autenticação SMTP para email)');
define('CD_12_73_DESC','Entre o número da porta IP que seu servidor SMTP utiliza. (Só é necessária se estiver utilizando Autenticação SMTP para email)');
define('CD_12_71_DESC','Entre a senha para sua caixa SMTP. (Only required if using SMTP Authentication for email)');
define('CD_12_70_DESC','Entre a conta de email me@meudominio.com). Esta á a conta de email que requer autenticação SMTP. (Só é necessária se estiver utilizando Autenticação SMTP para email)');
define('CD_12_15_DESC','Por favor, selecione o formato de email extra para o Admin');
define('CD_12_10_DESC','Endereço email do Proprietário.  Utilizado como \"somente visualização\" quando informando clientes como contactá-lo.');
define('CD_12_11_DESC','Endereço a partir do qual mensagens de email serão enviadas por padrão. Pode ser sobreposto no momento de escrever o email nos módulos de admin.');
define('TEXT_SEND_E-MAILS_IN_HTML_FORMAT','Envia e-mails em formato HTML');
define('CD_12_02_DESC','Define a sequência de caracteres utilizada para separar headers de email.');
define('CD_12_01_DESC','Define o método de envio de email.<br /><strong>PHP</strong> é o padrão, e utiliza wrappers internos PHP para processamento.<br />Servidores Windows e MacOS devem mudar esta especificação para <strong>SMTP</strong>.<br /><strong>SMTPAUTH</strong> só deve ser utilizado se seu servidor exigir autorização SMTP para enviar mensagens. Você deve configurar suas especificações SMTPAUTH nos campos apropriados desta seção admin.<br /><strong>sendmail</strong> é para servidores linux/unix utilizando o programa sendmail <br /><strong>\"sendmail -f\"</strong> é somente para servidores que exijam o uso de parâmetro para enviar email. Esta é uma especificação de segurança utilizada frequentemente para prevenir spoofing. Causará erros se seu servidor mailserver não estiver configurado para utilizá-lo.<br /><strong>Qmail</strong> é utilizado por servidores linux/unix rodando Qmail como sendmail wrapper at /var/qmail/bin/sendmail.');
define('CD_01_25_DESC','Quando habilitar ou não as funções de entrega e campos de entrega.');
define('CD_01_30_DESC','Quando habilitar ou não o armazanamento de campos encriptados.');
define('CD_01_20_DESC','Alterar automaticamente para o idioma da moeda quando ela é alterada');
define('CD_01_19_DESC','Permite múltiplas moedas nas telas de entrada.<br />Se não for selecionado, somente somente a moeda padrão será utilizada.');
define('CD_01_18_DESC','Permitir funcionalidade múltiplas filiais.<br />Se não for selecionado, somente uma localização da empresa será assumida.');
define('CD_01_16_DESC','Entre o número ID da empresa. Este número é utilizado para identificar transações geradas localmente contra transações importação/exportação.');
define('CD_01_14_DESC','Entre a homepage do site da empresa (sem o http://)');
define('CD_01_15_DESC','Entre o CNPJ da empresa');
define('CD_01_13_DESC','Entre o endereço de email geral da empresa');
define('CD_01_12_DESC','Entre o número Fax');
define('CD_01_11_DESC','Entre o número de telefone secundário');
define('CD_01_10_DESC','Entre o número de telefone principal da empresa');
define('CD_01_09_DESC','País onde a empresa está localizada <br /><br /><strong>Atenção: Por favor, lembre-se de ataulizar a Unidade Federal da empresa.</strong>');
define('CD_01_08_DESC','CEP onde a empresa está localizada');
define('CD_01_07_DESC','Unidade Federal onde a empresa está localizada');
define('CD_01_05_DESC','Segunda linha endereço');
define('CD_01_06_DESC','Municípo onde a empresa está localizada');
define('CD_01_03_DESC','Nome padrão ou identificador para utilizar em todas as operações com pagáveis.');
define('CD_01_04_DESC','Primeira linha endereço');
define('CD_01_01_DESC','Nome da minha empresa');
define('CD_01_02_DESC','Nome padrão ou identificador para utilizar em todas as operações com recebíveis.');
define('CD_00_03_DESC','o formato de apresentação para entrada e apresentação de datas/hora(padrão m/d/Y h:i:s a).');
define('CD_00_02_DESC','Identifica o delimitador utilizado para separar datas (padrão /). Deve ser igual ao delimitador utilizado no formato escolhido acima.');
define('CD_00_01_DESC','Estabelece o formato de apresentação para entrada e apresentação de datas(padrão m/d/Y), m - mês; d - dia; Y - ano (4 dígitos).');
define('CD_20_99_DESC','Habilita geração de rastreio para propósito de debug. Se selecionado, um menu adicional será adicionado às Ferramentas para baixar a informação que permitirá rastrear problemas de lançamento.');
define('CD_09_01_DESC','Especifica a preferência de exportação quando exportando relatórios e formulários. Local vai salvá-los no diretório /my_files/reports do sevidor web para uso de todas as empresas. Download vai baixar o arquivo no seu browser para salvar/imprimir na máquina local.');
define('CD_15_05_DESC','Quando habilitada, esta opção utilizará ajax para atualizar o temporizador de sessão a cada 5 minutos prevenindo a sessão de expirar e desconectar o usuário. Ajuda a prevenir lançamentos descartados quando PhreeBooks fica inativo e um lançamento resulta em uma tela de login.');
define('CD_08_10_DESC','Limita o tamanho dos valores históricos mostrados nas contas de cliente/fornecedor para vendas/compras.');
define('CD_15_01_DESC','Limite Tempo Sessão - Entre o tempo em segundos (padrão = 3600). Exemplo: 3600 = 1 hora<br />Atenção: Poucos segundos podem resultar em problemas ao inserir/editar produtos.');
define('CD_08_07_DESC','Atualiza as taxas de conversão das moedas carregadas em todo login.<br />Se desabilitado, taxas podem ser alteradas manualmente no menu Setup => Moedas.');
define('CD_08_05_DESC','Não apresenta mensagens em operações bem sucedidas. Somente mensagens de ATENÇÃO e ERRO serão mostradas.');
define('GEN_TABLES_AVAILABLE','Tabelas Disponíveis para: ');
define('CD_07_17_DESC','Tamanho mínimo de senha');
define('CD_08_01_DESC','Número máximo de resultados de busca por página');
define('CD_08_03_DESC','Verificar automaticamente novas versões do PhreeBooks.');
define('GEN_EXPORT_MESSAGE','Seleciona um formato e pressione o botão Exportar para continuar.');
define('GEN_IMPORT_MESSAGE','A lista abaixo mostra as tabelas disponpiveis para importação. Selecione um formato, carregue o arquivo e pressione o botão Importar para continuar.');
define('TEXT_SAMPLE_XML','Exemplo XML');
define('TEXT_SAMPLE_CSV','Exemplo CSV');
define('GEN_IMPORT_EXPORT_MESSAGE','Importação pode ser através de XML ou CSV. Clique no botão de exemplo para baixar um arquivo de exemplo para usar em propósitos de formatação.');
define('HEADING_MODULE_IMPORT_EXPORT','Importar/Exportar Tabelas Base de Dados');
define('TEXT_IMPORT_EXPORT_INFO','Informação Tabela');
define('GL_BB_IMPORT_PURCH_ORDERS','Importar Ordens Compra');
define('GL_BB_IMPORT_HELP_MSG','Veja no arquivo de ajuda para especificações de formato.');
define('TEXT_IMPORT_SALES_ORDERS','Importar Ordens Venda');
define('TEXT_IMPORT_INVENTORY','Importar Produtos');
define('GL_BB_IMPORT_PAYABLES','Importar Contas Pagar');
define('GL_BB_IMPORT_RECEIVABLES','Importar Contas Receber');
define('TEXT_IMPORT_JOURNAL_ENTRIES','Importar Lançamentos Diário');
define('GL_BTN_BEG_BAL','Entrar Saldos Iniciais');
define('GL_UTIL_BEG_BAL_TEXT','Para setup inicial e transferências de outro sistema contábil.');
define('GL_UTIL_BEG_BAL_LEGEND','Saldos Iniciais Diário Geral');
define('GL_BTN_IMP_BEG_BALANCES','Importar Produtos, Saldos Iniciais de Contas Receber e Contas Pagar, ');
define('GL_HEADING_IMPORT_BEG_BALANCES','Importar Saldos Iniciais');
define('GL_HEADING_BEGINNING_BALANCES','Tabela de Contas - Saldos Iniciais');
define('TEXT_CLEAN_SECURITY_SUCCESS','Removidos com sucesso %s registros de informação de segurança.');
define('TEXT_CLEAN_ALL_VALUES_WITH_EXPIRATION_DATE_BEFORE','Limpar todos os valores com data de expiração anterior a');
define('GEN_ADM_TOOLS_SECURITY_DESC','Esta ferramenta limpa todas as informações de valores de segurança com data de expiração anterior à data selecionada date. ATENÇÃO: Esta operação não pode ser desfeita!');
define('TEXT_CLEAN_DATA_SECURITY_VALUES','Limpar os Valores de Segurança de Dados');
define('TEXT_CLEAN_NOW','Limpar Agora');
define('TEXT_BACKUP_NOW','Backup Agora');
define('GEN_ADM_TOOLS_BTN_CLEAN_CONFIRM','Tem certeza de que quer remover estes registros de Log Auditoria?');
define('TEXT_CLEAN_OUT_AUDIT_LOG','Limpar Log Auditoria');
define('TEXT_BACKUP_AUDIT_LOG','Backup Log Auditoria');
define('GEN_ADM_TOOLS_CLEAN_LOG_DESC','Esta operação cria uma cópia de segurança do seus arquivos de Logs de Auditoria. Isto vai ajudar a manter o tamanho da base de dados menor e reduzirá a necessidade de espaço de backup para a empresa. Fazer cópia de segurança deste log é recomendado antes de limpá-lo, para preservar o histórico de transações do PhreeBooks. <br />INFORMAÇÃO: Limpar os Logs Auditoria deixará a informação do período corrente intacta e removerá todos os demais registros.');
define('GEN_ADM_TOOLS_CLEAN_LOG','Backup/Limpar Log Auditoria');
define('ERROR_CANNOT_CREATE_MODULE_DIR','Erro criando diretório: %s. Verifique suas permissões!');
define('ERROR_CANNOT_REMOVE_MODULE_DIR','Erro removendo diretório: %s. O diretório pode não existir ou pode não estar vazio! Deve ser removido manualmente.');
define('GEN_ERROR_NO_THEME_COLORS','Uma escolha de cor deve ser feita, este tema não parece ter uma! Por favor selecione outro tema.');
define('GEN_ADMIN_CANNOT_CHANGE_ROLES','Suas permissões não o habilitam a alterar os direitos/segurança do usuário!');
define('TEXT_THEMES_COLORS_TITLE','Temas e Esquemas de Cor');
define('TEXT_THEMES_COLORS_DESC','Estabeleça seu tema e esquema de cores prefertido. Pressiona o ícone Salvar para alterar o tema e vê-lo em ação.');
define('INV_FIELD_RESERVED_WORD','The field name entered is a reserved word. Please choose a new field name.');
define('TEXT_CHANGE_VARIOUS_SEQUENCE_NUMBERS','Alterar Vários Números Sequenciais');
define('TEXT_CONFIGURATION_VALUES_HAVE_BEEN_SAVED','Valores de Configuração foram gravados.');
define('TEXT_DOWNLOAD_DEBUG','Baixar Informação Rastreio Erro');
define('TEXT_CRASH_INFORMATION','PhreeBooks encontrou um erro inesperado. Clique no botão abaixo para baixar o arquivo de informação de rastreio para enviar para o administrador do sistema.');
define('TEXT_CRASH_TITLE','Informação Rastreio Erro SQL PhreeBooks');
define('TEXT_AUDIT_DB_DATA_CLEAN','Limpeza de Tabela Log de Auditoria Realizada');
define('TEXT_AUDIT_DB_DATA_BACKUP','Backup de Tabela Log de Auditoria Realizado');
define('TEXT_RESTRICT_PERIOD','Restringir Lançamentos ao Período Corrente?');
define('TEXT_DEFAULT_PAYABLES_ACCOUNT','Conta Padrão Pagamentos');
define('TEXT_DEFAULT_AR_ACCOUNT','Conta Padrão Recebíveis');
define('TEXT_RESTRICT_STORE','Restringir entradas a este Local Armazenagem?');
define('TEXT_DEFAULT_STORE','Local Armazenagem Padrão');
define('TEXT_DEFAULT_CASH_ACCOUNT','Conta Caixa Padrão');
define('TEXT_USER_NAME','Nome Usuário');
define('TEXT_ROUND_PRECISE','Precisão Arredondamento');
define('TEXT_ROUND_DECIMAL','Casas Decimais Arredondar');
define('TEXT_POSTED_CURRENCY','Posted Currency');
define('TEXT_NULL_POSTED_CURRENCY','Null 0 - Posted Currency');
define('TEXT_NULL_DEFAULT_CURRENCY','Null 0 - Moeda Padrão');
define('TEXT_DEFAULT_CURRENCY','Moeda Padrão');
define('TEXT_FORM_PLEASE_WAIT','Por favor aguarde ... Se estiver atualizando pode demorar um pouco.');
define('TEXT_LOGIN','Login');
define('TEXT_PASSWORD_FORGOTTEN','Reenviar Senha');
define('TEXT_LOGIN_MENU','Selecione Localização Menu');
define('TEXT_LOGIN_COLORS','Selecione Esquema Cores');
define('TEXT_SELECT_THEME','Selecione Tema');
define('TEXT_SELECT_LANGUAGE','Selecione Língua');
define('TEXT_LOGIN_COMPANY','Selecione Empresa: ');
define('TEXT_LOGIN_PASS','Senha: ');
define('TEXT_LOGIN_NAME','Usuário: ');
define('TEXT_PHREEBOOKS_LOGIN','PhreeBooks Login');
define('TEXT_NEXT_ROW_ID','ID Próxima Linha');
define('TEXT_DB_ENGINE','BD Máquina');
define('TEXT_NUMBER_OF_ROWS','Número de Linhas');
define('TEXT_COLLATION','Collation');
define('TEXT_TABLE_STATS','Tabela Estatísticas');
define('IE_HEADING_TITLE','Importação/Exportação e Saldos Inicias');
define('HEADING_MODULE_IMPORT','Módulo Importação/Exportação Dados');
define('TEXT_TABS','Abas');
define('TEXT_REQUIRED','OBRIGATÓRIO');
define('TEXT_TAB_TITLE','Título Aba');
define('TEXT_DOWNLOAD','Download');
define('TEXT_LEGEND','Legenda');
define('TEXT_DEBUG_AND_TROUBLESHOOTING','Debug e Solução Problemas');
define('TEXT_LOCAL','Local');
define('TEXT_CUSTOM_FIELDS','Campos Customizados');
define('TEXT_CUSTOM_TABS','Abas Customizadas');
define('CHARSET','utf-8');
define('TEXT_DEFAULT_GL_ACCOUNTS','Contas Contábeis Padrão');
define('HTML_PARAMS','lang=\"pt-BR\" xml:lang=\"pt-BR\"');
define('TEXT_PHREEDOM_INFO','EDS Brasil Business Solutions');
define('TITLE','EDS Brasil ERP');
define('LANGUAGE','Portugues (BR)');
define('TEXT_USER_LOGIN','User Login');
define('GEN_LOG_LOGIN_FAILED','Failed User Login - id -> ');
define('GEN_LOG_LOGOFF','User Logoff -> ');
define('GEN_LOG_RESEND_PW','Re-sent Password to email -> ');

?>
