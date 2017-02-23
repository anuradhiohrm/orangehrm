/**
* @api {get} /employee/:id/contact-detail Employee Contact Detail
* @apiName getEmployeeContactDetails
* @apiGroup Employee
*
* @apiParam {Number}  id Employee number
*
* @apiSuccess {String} fullName  Employee full name.
* @apiSuccess {String} id  Employee id.
* @apiSuccess {String} empNumber  Employee number.
* @apiSuccess {String} addressStreet1  Address street 1 of the employee.
* @apiSuccess {String} addressStreet2  Address street 2 of the employee.
* @apiSuccess {String} city  City of the employee.
* @apiSuccess {String} state  State of the employee.
* @apiSuccess {String} zip  Zip code of the employee.
* @apiSuccess {String} country  Country of the employee.
* @apiSuccess {String} homeTelephone  Home telephone number of the employee.
* @apiSuccess {String} mobile  Mobile number of the employee.
* @apiSuccess {String} workTelephone  Work telephone number of the employee.
* @apiSuccess {String} workEmail  Work email of the employee.
* @apiSuccess {String} otherEmail  Other email of the employee.
*
* @apiSuccessExample Success-Response:
*     HTTP/1.1 200 OK
*
*       {
*         "data":
*         {
*             "id": "001",
*             "empNumber": "1",
*             "fullName": "Nina Jane Lewis",
*             "addressStreet1": "No 35 Park street ,Devmore canada",
*             "addressStreet2": "No 40 River view Devmore",
*             "city": "Devmore",
*             "state": "Western",
*             "zip": "15224",
*             "country": "Canada",
*             "homeTelephone": "154475426",
*             "workTelephone": "01244545144545",
*             "mobile": "1204415552",
*             "workEmail": "nina@orangehrmlive.com",
*             "otherEmail": "ninalewis@yahoo.com"
*         },
*       "rels": {
*       }
*     }
*
* @apiError UserNotFound The id of the employee was not found.
*
* @apiErrorExample Error-Response:
*     HTTP/1.1 404 Not Found
*     {
*       "error": "EmployeeNotFound"
*     }
*/