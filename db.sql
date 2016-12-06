
UPDATE `vtiger_ws_operation_seq` SET `id` = (id+1);
INSERT INTO `vtiger_ws_operation` (`operationid`, `name`, `handler_path`, `handler_method`, `type`, `prelogin`) VALUES ((SELECT id FROM `vtiger_ws_operation_seq`), 'retrievequery', 'include/Webservices/RetrieveQuery.php', 'vtws_retrievequery', 'GET', '0');

INSERT INTO `vtiger_ws_operation_parameters` (`operationid`, `name`, `type`, `sequence`) VALUES 
((SELECT id FROM `vtiger_ws_operation_seq`), 'module', 'String', '1'),
((SELECT id FROM `vtiger_ws_operation_seq`), 'andWhere', 'encoded', '2'),
((SELECT id FROM `vtiger_ws_operation_seq`), 'orWhere', 'encoded', '3')
((SELECT id FROM `vtiger_ws_operation_seq`), 'limit', 'String', '4'); 
