# Track work items in a sample application using Aurora Serverless and Amazon SES built with the SDK for Ruby

## Overview
This example code comprises a "real-world" reference application showcasing an [Amazon Aurora Serverless database](https://docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/CHAP_AuroraOverview.html) using the [AWS SDK for Ruby](https://docs.aws.amazon.com/sdk-for-ruby/v3/developer-guide/welcome.html).

This code is written to be browsed in an exploratory manner.
For a more hands-on experience, you can run the application by invoking this example code using the following instructions.

# ⚠️ Important
* Running this code (including tests) might result in charges to your AWS account.
* We strongly recommend that you grant your code [least privilege](https://docs.aws.amazon.com/IAM/latest/UserGuide/best-practices.html#grant-least-privilege).
* This code is not tested in every [AWS Region](https://aws.amazon.com/about-aws/global-infrastructure/regional-product-services).

# About this example code
The code comprises an application designed to manage fictitious work items using three key components.

![](architecture_diagram.png)


## 1. Backend
The centerpiece of this example is an API written exclusively in Ruby. It features the following gems:
* [AWS SDK for Ruby](https://docs.aws.amazon.com/sdk-for-ruby/v3/developer-guide/welcome.html) (for communicating with Amazon Aurora)
* [Sinatra](https://sinatrarb.com/intro.html) (for a lightweight API implementation)
* [Sequel](https://sequel.jeremyevans.net/) (for Ruby-native modeling of SQL queries)

This Ruby API consists of the following API routes:

|method              | route                |action        | client             |function                |
|--------------------|----------------------|--------------|--------------------|------------------------|
|GET                 | /api/items           |List items    | RDSDataService     |execute_statement(*SQL*)|
|POST                | /api/items           |Add item      | RDSDataService     |execute_statement(*SQL*)|
|PUT                 | /api/items:archive   |Archive item  | RDSDataService     |execute_statement(*SQL*)|
|GET                 | /api/items/{item_id} |Get item      | RDSDataService     |execute_statement(*SQL*)|
|POST                | /api/items:report    |Create report | RDSDataService     |execute_statement(*SQL*)|

## 2. Frontend
The frontend code is written in JavaScript and implemented using the React framework.
For more information, see the [React Elwing Client README](../../../resources/clients/react/elwing/README.md).

## 3. Database
This example relies on a MySQL 5.7 database implemented using Amazon Aurora, a serverless relational database management system (RDBMS).
The Aurora DB cluster is deployed using the AWS Cloud Development Kit (AWS CDK).
For more information, see the [Aurora Serverless App CDK script README.md](../../../resources/cdk/aurora_serverless_app/README.md).

## Prerequisites
To explore this example, you must first do the following:
1. Create an account and configure credentials using [instructions in the top-level README.md](../../../README.md#invoke-example-code).
2. Install Ruby and resolve dependencies using [instructions in the Ruby README.md](../../../ruby/README.md).

## Create the resources
Set up the AWS resources needed to run this example as follows:
1. Create AWS infrastructure using [instructions in the Aurora Serverless App README.md](../../../resources/cdk/aurora_serverless_app/README.md).
   * NOTE: Store the following output values in the `env/config.yml` file: `CLUSTER_ARN`, `SECRET_ARN`, and `DATABASE`.
2. Populate your database with a table and data using the following commands:
     ```bash
     cd ruby/cross_service_examples/item-tracker/helpers
     ruby create_table.rb # Checks for database and creates a new table.
     ruby populate_data.rb # Creates a table with 10 records.
     ```
3. Register your email address with Amazon Simple Email Service (SES) using the instructions in [Creating and verifying identities in Amazon SES](https://docs.aws.amazon.com/ses/latest/dg/creating-identities.html).
   * NOTE: Use this email for the `sender_email` and `recipient_email` fields in your `env/config.yml` file.

## Build the code
To view this example in its entirety, you must do the following:
1. Start the frontend React application using the following commands:
    ```bash
     cd resources/clients/elwing # Located within Resources sub-directory.
     npm install # First time only.
     npm start # Launches a browser session on localhost:3000.
    ```
2. Open a second tab in your terminal and run the following command:
    ```bash
    cd ruby/cross_service_examples/item-tracker
    ruby app.rb # Starts REST API listening on port 8080.
    ```
Now, visit http://localhost:3000/item_tracker to view your working application.

## Test the code
Test this application manually via the frontend or automatically via the RSpec tests.

### Manual validation (via frontend React app)
After the app starts, manually validate the following behaviors on the frontend:
* Filter items by All, Archived, and Active (not archived).
* Archive an item by choosing the Archive button.
* Add an item by choosing the Add Item button and submitting the form.
* Send a report of items by entering a verified email address and choosing Submit.

As you interact with the React app, logs will appear in the command line tab where you started the REST API.

### Automated validation (via RSpec tests)
Validate the internal logic within this example by running the following commands:
```bash
cd spec
rspec db_wrapper_spec.rb
```

## Delete the resources

To avoid charges, delete all the resources that you created for this tutorial. Follow the instructions in the Destroying resources section of the README for the Aurora Serverless sample application.

## Additional resources
* [Aurora User Guide](https://docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/CHAP_AuroraOverview.html)
* [Amazon SES Developer Guide](https://docs.aws.amazon.com/ses/latest/dg/Welcome.html)
* [SDK for Ruby Developer Guide](https://docs.aws.amazon.com/sdk-for-ruby/v3/developer-guide/welcome.html)
* [SDK for Ruby API Reference](https://docs.aws.amazon.com/sdk-for-ruby/v3/api/)
