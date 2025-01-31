# Basic Info Api
This API provides a system for fetching basic user information including the name, email address and the current time the api was fetched.

---

## Setup Instructions

### Requirements
- PHP 8.2+ 
- Laravel ^11.4+

### Installation
1. Clone the repository:
  On your terminal, in your preferred directory, copy and paste the code below:
  ```bash
     git clone https://github.com/Uwakmfon1/basicInfo-api-HNG12.0.git
  ```
2. Navigate into the Project directory:
  ```bash 
    cd basicInfo-api-HNG12.0
  ```
3. Install PHP dependencies:
  ```bash
    composer install
  ```
4. Copy the .env.example file to .env and configure your environment variables, including any other necessary configuration.
  ```bash
    cp .env.example .env
  ```
5. Generate an application key
  ```bash
    php artisan key:generate
  ```

7. Start the development server
```bash
  php artisan serve
```

## API Documentation

### Overview
  Below is the main API endpoint with an example for requests and responses

### Endpoints

| Method | Endpoint        |   Description               |
|--------|-----------------|-----------------------------|
| GET    | /api/basic-info | Get records of the user    |


### Example: Fetch user details
#### Request: GET http://localhost:8000/api/basic-info

#### Response to the above request:
  ```bash
    {
        "email": "udohuwakmfon2@gmail.com",
        "current_datetime": "2025-01-30T21:34:28+00:00",
        "github_url": "<https://github.com/Uwakmfon1/basicInfo-api-HNG12.0>"
    }
  ```

#### Backlink: https://hng.tech/hire/php-developers

#### Thank you for reading. 🌱 




