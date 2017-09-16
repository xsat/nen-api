# API documentation

## 1. Auth
### 1.1. Login

Request:
```
POST {{host}}/api/1.0/auth
Content-Type: application/json
{
    "email": "bob@email.com",
    "password": "12356"
}
```

Response:
```
HTTP/1.x 200 OK
Content-Type: application/json
{
    "token": "{{access_token}}"
}
```

### 1.2. Logout

Request:
```
DELETE {{host}}/api/1.0/auth
Authorization: Bearer {{access_token}}
```

Response:
```
HTTP/1.x 200 OK
Content-Type: application/json
{}
```

## 2. User

### 2.1. Create user

Request:
```
POST {{host}}/api/1.0/user
Content-Type: application/json
{
    "name": "Bob",
    "email": "bob@email.com",
    "password": "12356"
}
```

Response:
```
HTTP/1.x 200 OK
Content-Type: application/json
{
    "token": "{{access_token}}"
}
```

### 2.2. Update user

Request:
```
PUT {{host}}/api/1.0/user
Authorization: Bearer {{access_token}}
Content-Type: application/json
{
    "name": "Bob",
    "email": "bob@email.com"
}
```

Response:
```
HTTP/1.x 200 OK
Content-Type: application/json
{}
```

### 2.3. View user

Request:
```
GET {{host}}/api/1.0/user
Authorization: Bearer {{access_token}}
```

Response:
```
HTTP/1.x 200 OK
Content-Type: application/json
{
    "user_id": 1,
    "name": "Bob",
    "email": "bob@email.com"
}
```

### 2.4. Delete user

Request:
```
DELETE {{host}}/api/1.0/user
Authorization: Bearer {{access_token}}
```

Response:
```
HTTP/1.x 200 OK
Content-Type: application/json
{}
```

### 2.5. Update user password

Request:
```
PUT {{host}}/api/1.0/user/password
Authorization: Bearer {{access_token}}
Content-Type: application/json
{
    "password": "12356"
}
```

Response:
```
HTTP/1.x 200 OK
Content-Type: application/json
{}
```
