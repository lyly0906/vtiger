<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
$languageStrings = array(
	'LBL_IMPORT_STEP_1'            => 'Step 1'                      , 
	'LBL_IMPORT_STEP_1_DESCRIPTION' => 'Select File'                 , 
	'LBL_IMPORT_SUPPORTED_FILE_TYPES' => '	Supported File Type(s): .CSV, .VCF', 
	'LBL_IMPORT_STEP_2'            => 'Step 2'                      , 
	'LBL_IMPORT_STEP_2_DESCRIPTION' => 'Specify Format'              , 
	'LBL_FILE_TYPE'                => 'File Type'                   , 
	'LBL_CHARACTER_ENCODING'       => 'Character Encoding'          , 
	'LBL_DELIMITER'                => 'Delimitador:'                , 
	'LBL_HAS_HEADER'               => 'Tem Cabeçalho:'             , 
	'LBL_IMPORT_STEP_3'            => 'Step 3'                      , 
	'LBL_IMPORT_STEP_3_DESCRIPTION' => 'Duplicate Record Handling'   , 
	'LBL_IMPORT_STEP_3_DESCRIPTION_DETAILED' => 'Select this option to enable and set duplicate merge criteria', 
	'LBL_SPECIFY_MERGE_TYPE'       => 'Select how duplicate records should be handled', 
	'LBL_SELECT_MERGE_FIELDS'      => 'Select the matching fields to find duplicate records', 
	'LBL_AVAILABLE_FIELDS'         => 'Campos Disponíveis'         , 
	'LBL_SELECTED_FIELDS'          => ' Campos para serem combinados', 
	'LBL_NEXT_BUTTON_LABEL'        => 'Próximo'                    , 
	'LBL_IMPORT_STEP_4'            => 'Step 4'                      , 
	'LBL_IMPORT_STEP_4_DESCRIPTION' => 'Map the Columns to Module Fields', 
	'LBL_FILE_COLUMN_HEADER'       => 'Header'                      , 
	'LBL_ROW_1'                    => 'Row 1'                       , 
	'LBL_CRM_FIELDS'               => 'CRM Fields'                  , 
	'LBL_DEFAULT_VALUE'            => 'Default Value'               , 
	'LBL_SAVE_AS_CUSTOM_MAPPING'   => 'Save as Custom Mapping '     , 
	'LBL_IMPORT_BUTTON_LABEL'      => 'Importar'                    , 
	'LBL_RESULT'                   => 'Result'                      , 
	'LBL_TOTAL_RECORDS_IMPORTED'   => 'Records successfully imported', 
	'LBL_NUMBER_OF_RECORDS_CREATED' => 'Records created'             , 
	'LBL_NUMBER_OF_RECORDS_UPDATED' => 'Records overwritten'         , 
	'LBL_NUMBER_OF_RECORDS_SKIPPED' => 'Records skipped'             , 
	'LBL_NUMBER_OF_RECORDS_MERGED' => 'Records merged'              , 
	'LBL_TOTAL_RECORDS_FAILED'     => 'Records failed importing'    , 
	'LBL_IMPORT_MORE'              => 'Importar Mais'               , 
	'LBL_VIEW_LAST_IMPORTED_RECORDS' => 'Last Imported Records'       , 
	'LBL_UNDO_LAST_IMPORT'         => 'Desfazer Última Importação', 
	'LBL_FINISH_BUTTON_LABEL'      => 'Final'                       , 
	'LBL_UNDO_RESULT'              => 'Undo Import Result'          , 
	'LBL_TOTAL_RECORDS'            => 'Total Number of Records'     , 
	'LBL_NUMBER_OF_RECORDS_DELETED' => 'Number of records deleted'   , 
	'LBL_OK_BUTTON_LABEL'          => 'Ok'                          , 
	'LBL_IMPORT_SCHEDULED'         => 'Import Scheduled'            , 
	'LBL_RUNNING'                  => 'Executando'                  , 
	'LBL_CANCEL_IMPORT'            => 'Cancel Import'               , 
	'LBL_ERROR'                    => 'Erro:'                       , 
	'LBL_CLEAR_DATA'               => 'Clear Data'                  , 
	'ERR_UNIMPORTED_RECORDS_EXIST' => 'Unable to import more data in this batch. Please start a new import.', 
	'ERR_IMPORT_INTERRUPTED'       => 'Current Import has been interrupted. Please try again later', 
	'ERR_FAILED_TO_LOCK_MODULE'    => 'Failed to lock the module for import. Re-try again later', 
	'LBL_SELECT_SAVED_MAPPING'     => 'Select Saved Mapping'        , 
	'LBL_IMPORT_ERROR_LARGE_FILE'  => 'Import Error Large file '    , // TODO: Review
	'LBL_FILE_UPLOAD_FAILED'       => 'File Upload Failed'          , // TODO: Review
	'LBL_IMPORT_CHANGE_UPLOAD_SIZE' => 'Import Change Upload Size'   , // TODO: Review
	'LBL_IMPORT_DIRECTORY_NOT_WRITABLE' => 'Import Directory is not writable', // TODO: Review
	'LBL_IMPORT_FILE_COPY_FAILED'  => 'Import File copy failed'     , // TODO: Review
	'LBL_INVALID_FILE'             => 'Invalid File'                , // TODO: Review
	'LBL_NO_ROWS_FOUND'            => 'No rows found'               , // TODO: Review
	'LBL_SCHEDULED_IMPORT_DETAILS' => 'Your import has been scheduled and will start within 15 minutes. You will receive an email after import is completed.  <br> <br>
										Please make sure that the Outgoing server and your email address is configured to receive email notification', // TODO: Review
	'LBL_DETAILS'                  => 'Details'                     , // TODO: Review
	'skipped'                      => 'Skipped Records'             , // TODO: Review
	'failed'                       => 'Failed Records'              , // TODO: Review
    
        'LBL_IMPORT_LINEITEMS_CURRENCY'=> 'Moeda (Itens de linha)',

	'LBL_SKIP_THIS_STEP' => 'Pular esta etapa',
	'LBL_UPLOAD_ICS' => 'Carregar arquivo ICS',
	'LBL_ICS_FILE' => 'ICS Arquivo',
	'LBL_IMPORT_FROM_ICS_FILE' => 'Importar do arquivo ICS',
	'LBL_SELECT_ICS_FILE' => 'Selecione o arquivo ICS',

  'LBL_USE_SAVED_MAPS' => 'O Uso De Mapas Guardados',
  'LBL_IMPORT_MAP_FIELDS' => 'Mapa do coloumns para campos CRM',
  'LBL_UPLOAD_CSV' => 'Upload do Arquivo CSV',
  'LBL_UPLOAD_VCF' => 'Upload do Arquivo VCF',
  'LBL_DUPLICATE_HANDLING' => 'Duplicado De Manipulação',
  'LBL_FIELD_MAPPING' => 'Mapeamento Do Campo',
  'LBL_IMPORT_FROM_CSV_FILE' => 'Importação de arquivo CSV',
  'LBL_SELECT_IMPORT_FILE_FORMAT' => 'Onde você gostaria de importar ?',
  'LBL_CSV_FILE' => 'Arquivo CSV',
  'LBL_VCF_FILE' => 'Arquivo VCF',
  'LBL_GOOGLE' => 'O Google',
  'LBL_IMPORT_COMPLETED' => 'Importação Concluída',
  'LBL_IMPORT_SUMMARY' => 'Importação resumo',
  'LBL_DELETION_COMPLETED' => 'Exclusão Concluída',
  'LBL_TOTAL_RECORDS_SCANNED' => 'Total de registros digitalizados',
  'LBL_SKIP_BUTTON' => 'Pular',
  'LBL_DUPLICATE_RECORD_HANDLING' => 'Registro duplicado tratamento',
  'LBL_IMPORT_FROM_VCF_FILE' => 'Importação a partir de ficheiro VCF',
  'LBL_SELECT_VCF_FILE' => 'Selecione arquivo VCF',
  'LBL_DONE_BUTTON' => 'Feito',
  'LBL_DELETION_SUMMARY' => 'Excluir o resumo',

);
