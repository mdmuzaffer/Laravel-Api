I have create ApI in laravel Basically I have created api in CURD system as well as Test rout with authentication
like check auth tokent etc.

I have used api.php for routing ,I have not use web.php route so, routing will be like
http://localhost/laravelapi/public/api/user

1  Created a rout with token Now start query

Url - http://localhost/laravelapi/public/api/user
Header:= 
Users-key:ABCDXYZ
Token:qwerty789

Message:

[
    {
        "status": 200,
        "response": "ok",
        "message": "Your token is Correct",
        "data": [
            {
                "id": 1,
                "user_id": 1,
                "user_key": "ABCDXYZ",
                "token": "qwerty789",
                "level": "0",
                "created_at": "2020-02-16 12:18:24"
            }
        ]
    }
]

==================================
2. Select find query all
Url - http://localhost/laravelapi/public/api/country

Header :
[
    {
        "id": 1,
        "iso": "XX",
        "name": "UNKNOWN",
        "dname": "Unknown",
        "iso3": "XX",
        "position": 1,
        "numcode": 0,
        "phonecode": 0,
        "created": 1581145936,
        "register_by": 1,
        "modified": 1581145936,
        "modified_by": 1,
        "record_deleted": 0
    },
    {
        "id": 2,
        "iso": "AF",
        "name": "AFGHANISTAN",
        "dname": "Afghanistan",
        "iso3": "AFG",
        "position": 2,
        "numcode": 4,
        "phonecode": 93,
        "created": 1581145936,
        "register_by": 1,
        "modified": 1581145936,
        "modified_by": 1,
        "record_deleted": 0
    },
]
===================================================

3. Select find query through ID 

Url - http://localhost/laravelapi/public/api/country/11
Header:-
Messsage
-------------

[
    {
        "status": 200,
        "response": "ok",
        "message": "find your country",
        "data": {
            "id": 11,
            "iso": "AR",
            "name": "ARGENTINA",
            "dname": "Argentina",
            "iso3": "ARG",
            "position": 11,
            "numcode": 32,
            "phonecode": 54,
            "created": 1581145936,
            "register_by": 1,
            "modified": 1581145936,
            "modified_by": 1,
            "record_deleted": 0
        }
    }
]

--------------
4. Add country Insert query

Url - http://localhost/laravelapi/public/api/country-save
Header:
Body form-data:
-----------
iso:TA
name:Time
dname:Test time
iso3:2
position:1
numcode:478
phonecode:39
created:1
register_by:1
modified:1
modified_by:1
record_deleted:0
-------------

Message:-
-------------------

[
    {
        "status": 200,
        "response": "ok",
        "lastId": 241,
        "message": "added a country",
        "data": {
            "id": 241,
            "iso": "TA",
            "name": "Time",
            "dname": "Test time",
            "iso3": "2",
            "position": 1,
            "numcode": 478,
            "phonecode": 39,
            "created": 1584151377,
            "register_by": 1,
            "modified": 1584151377,
            "modified_by": 1,
            "record_deleted": 0
        }
    }
]
------------------

5. Delete country record 
Url - http://localhost/laravelapi/public/api/country/243
Header:-
Message:-
---------------
[
    {
        "status": 200,
        "response": "ok",
        "message": "deleted your country"
    }
]
--------------
