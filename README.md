# Hackathon Project
Created by team ***Hack Sparrow***

## Short Project Description
This feature allows customer to view products based on phrase search that they have entered in search Box. It reduces number of clicks for finding the right category and multiple filters on PLP to view the products matching the customers' requirements. Also, we have tried promoting green products for the given search to ensure less CO2 emission products are shown for their purchase.

This project integrate with google vertex api to get related data based on provided text.

## Prerequisite
- Should have a service account credentials with vertex ai admin access stored in json file at root level and set env variable with file path as `SERVICE_ACCOUNT_CREDENTIALS_FILE_PATH`.

## Steps
- After installing all dependencies, in config_default.php, ai search can be disabled or enabled using
```
....
$config[SearchElasticsearchConstants::ENABLE_GOOGLE_AI_SEARCH] = true;
....
```