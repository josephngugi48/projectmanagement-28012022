#Install
1. Clone the repository $ git clone git@github.com:josephngugi48/projectmanagement-28012022.git
2. Install the composer and npm dependencies $ composer install $ yarn install
3. Copy the provided .env file $ cp .env.example .env {create database locally}
4. Run $ php artisan migrate
5. Setup your app key $ php artisan key:generate
6. Start sail $ php artisan run serve
7. Incase of any installation error, try running: 
i. $ composer install (make sure you have composer in your machine/server), 
ii. $ composer update , 
iii.  $ php artisan migrate
iv.  $ php artisan key:generate
8. 
Running Locally
* The project is already configured with Laravel, and it is the recommend way to run it locally.
* The followign services are already configured and available in localhost:.
Service
Port
MySQL
3306
PhpMyAdmin
80
* Run below SQL queries to create the system default table items (i.e. Country, Org units, Project Status, Themes, Users, Funds)
-- Country: 
INSERT INTO `countries` (`id`, `countryname`, `countrycode`, `created_at`, `updated_at`) VALUES
(1, 'GLOBAL', '', NULL, NULL),
(2, 'Kenya', '', NULL, NULL),
(3, 'Somalia', '', NULL, NULL);

-- Org units:
INSERT INTO `org_units` (`id`, `orgunit`, `created_at`, `updated_at`) VALUES
(1, 'Urban Economy', NULL, NULL),
(2, 'External Relations', NULL, NULL),
(3, 'Liaison Office New York/Washington', NULL, NULL),
(4, 'Regional Office for Africa', NULL, NULL);

-- Project Status: 
INSERT INTO `project_statuses` (`id`, `statusname`, `isdisabled`, `created_at`, `updated_at`) VALUES
(1, 'Approved', 1, NULL, NULL),
(2, 'Pending Approval', 1, NULL, NULL);

-- Themes: 
INSERT INTO `themes` (`id`, `themetitle`, `created_at`, `updated_at`) VALUES
(1, 'Urban Economy', NULL, NULL),
(2, 'Advocacy', NULL, NULL),
(3, 'Management', NULL, NULL),
(4, 'Urban Land, Legislation & Governance', NULL, NULL),
(5, 'Risk Reduction and Rehabilitation', NULL, NULL);

-- Users:
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joseph', 'josephngugi48@gmail.com', NULL, '$2y$10$M8ziPCpD/vrszV.hHCkvbud06cHWITvmNwlA4fh120dUipe2pLVHG', NULL, '2022-01-28 06:30:51', '2022-01-28 06:30:51');

-- Funds:
INSERT INTO funds (id, fundscode, created_at) VALUES(1, 'FNO',  '2022-01-28 06:30:51'), (2, 'FNE',  '2022-01-28 06:30:51'), (3, 'FOD',  '2022-01-28 06:30:51'), (4, 'FJO',  '2022-01-28 06:30:51'), (5, 'QXB',  '2022-01-28 06:30:51');

API Details 
1. GET Project(s)
Request Type: GET Request 
URL: http://127.0.0.1:8000/api/projects/{id}
Note: The {id} can be numeric (1, 2, 3, etc.), string (All) or Blank  
Get Project(s) Request Method Name: projects/{id}
2. GET Project(s) by country - Kenya
Request Type: GET Request 
URL: http://127.0.0.1:8000/api/projects/country/{id}
Note: The {id} can be numeric (1, 2, 3, etc.), string (Kenya, Somalia, GLOBAL), Blank  
Get Country(s) Request Method Name: country/{id}
3. GET Project(s) by status - Approved
Request Type: GET Request 
URL: http://127.0.0.1:8000/api/projects/ApprovalStatus/{id}
Note: The {id} can be numeric (1, 2, 3, etc.), string (Kenya, Somalia, GLOBAL), Blank  
Get Project Approval Status Request Method Name: ApprovalStatus /{id}
