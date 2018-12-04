# No SQL web service instead of query api
No SQL or Non SQL like web service alternative to vtiger web service query operation.  This web service can be used to write queries, but not using SQL like query.  This is alterative of mod_security like issues happening in shared hosting too.

## Setup
* Copy the files into the CRM root (it may ask to overwrite few folders, answer yes)
* Run the db.sql under CRM database

## Examples
This example is given for Mobile API

### Getting all accounts
$params = array(
    "operation" => "retrievequery", "module" => "Accounts",  
    
    "andWhere" => json_encode(array()), // This is equal to SELECT ALL
    
    "orWhere" => json_encode(array()),
    
    "limit" => "0,100", // Call 100 by 100 until empty set will be received. Example next limit set would be 100, 100
    
    "_session" => $resobj->result->login->session,
);



### Getting an Account

$params = array(
    "operation" => "retrievequery", "module" => "Accounts",
    "andWhere" => json_encode(array('email1' => 'ajstharsan@gmail.com')), // use a specifi email rather than the one hardcoded here
    "orWhere" => json_encode(array()),
    "limit" => "",
    "_session" => $resobj->result->login->session,
);



