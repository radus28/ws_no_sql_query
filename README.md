# No SQL web service instead of query api
This is useful for the servers which prohibits 'query' web service method of vtiger.

## Setup
* Copy the files into the CRM root (it may ask to overwrite few folders, answer yes)
* Run the db.sql under CRM database

## Examples
This example is given for Mobile API

### Getting all accounts
$params = array(
    "_operation" => "fetchQuery", "module" => "Accounts",  
    
    "andWhere" => json_encode(array()), // This is equal to SELECT ALL
    
    "orWhere" => json_encode(array()),
    
    "limit" => "0,100", // Call 100 by 100 until empty set will be received. Example next limit set would be 100, 100
    
    "_session" => $resobj->result->login->session,
);



### Getting an Account

$params = array(
    "_operation" => "fetchQuery", "module" => "Accounts",
    "andWhere" => json_encode(array('email1' => 'ajstharsan@gmail.com')), // use a specifi email rather than the one hardcoded here
    "orWhere" => json_encode(array()),
    "limit" => "",
    "_session" => $resobj->result->login->session,
);



