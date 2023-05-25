<!--Generated by WRITEME on 2023-04-12 00:07:35.375493 (UTC)-->
# Aurora code examples for the SDK for Python

## Overview

Shows how to use the AWS SDK for Python (Boto3) to work with Amazon Aurora.

<!--custom.overview.start-->
<!--custom.overview.end-->

*Aurora is a fully managed relational database engine that's built for the cloud and compatible with MySQL and PostgreSQL. Amazon Aurora is part of Amazon Relational Database Service (Amazon RDS).*

## ⚠ Important

* Running this code might result in charges to your AWS account.
* Running the tests might result in charges to your AWS account.
* We recommend that you grant your code least privilege. At most, grant only the minimum permissions required to perform the task. For more information, see [Grant least privilege](https://docs.aws.amazon.com/IAM/latest/UserGuide/best-practices.html#grant-least-privilege).
* This code is not tested in every AWS Region. For more information, see [AWS Regional Services](https://aws.amazon.com/about-aws/global-infrastructure/regional-product-services).

<!--custom.important.start-->
<!--custom.important.end-->

## Code examples

### Prerequisites

For prerequisites, see the [README](../../README.md#Prerequisites) in the `python` folder.

Install the packages required by these examples by running the following in a virtual environment:

```
python -m pip install -r requirements.txt
```

<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Single actions

Code excerpts that show you how to call individual service functions.

* [Create a DB cluster](aurora_wrapper.py#L182) (`CreateDBCluster`)
* [Create a DB cluster parameter group](aurora_wrapper.py#L60) (`CreateDBClusterParameterGroup`)
* [Create a DB cluster snapshot](aurora_wrapper.py#L236) (`CreateDBClusterSnapshot`)
* [Create a DB instance in a DB cluster](aurora_wrapper.py#L279) (`CreateDBInstance`)
* [Delete a DB cluster](aurora_wrapper.py#L220) (`DeleteDBCluster`)
* [Delete a DB cluster parameter group](aurora_wrapper.py#L86) (`DeleteDBClusterParameterGroup`)
* [Delete a DB instance](aurora_wrapper.py#L382) (`DeleteDBInstance`)
* [Describe DB cluster parameter groups](aurora_wrapper.py#L36) (`DescribeDBClusterParameterGroups`)
* [Describe DB cluster snapshots](aurora_wrapper.py#L258) (`DescribeDBClusterSnapshots`)
* [Describe DB clusters](aurora_wrapper.py#L158) (`DescribeDBClusters`)
* [Describe DB instances](aurora_wrapper.py#L358) (`DescribeDBInstances`)
* [Describe database engine versions](aurora_wrapper.py#L307) (`DescribeDBEngineVersions`)
* [Describe options for DB instances](aurora_wrapper.py#L334) (`DescribeOrderableDBInstanceOptions`)
* [Describe parameters from a DB cluster parameter group](aurora_wrapper.py#L106) (`DescribeDBClusterParameters`)
* [Update parameters in a DB cluster parameter group](aurora_wrapper.py#L137) (`ModifyDBClusterParameterGroup`)

### Scenarios

Code examples that show you how to accomplish a specific task by calling multiple
functions within the same service.

* [Get started with DB clusters](scenario_get_started_aurora.py) 

### Cross-service examples

Sample applications that work across multiple AWS services.

* [Create an Aurora Serverless work item tracker](../../cross_service/aurora_item_tracker) 

## Run the examples

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->



#### Get started with DB clusters

This example shows you how to do the following:

* Create a custom Aurora DB cluster parameter group and set parameter values.
* Create a DB cluster that uses the parameter group.
* Create a DB instance that contains a database.
* Take a snapshot of the DB cluster, then clean up resources.

<!--custom.scenario_prereqs.aurora_Scenario_GetStartedClusters.start-->
<!--custom.scenario_prereqs.aurora_Scenario_GetStartedClusters.end-->

Start the example by running the following at a command prompt:

```
python scenario_get_started_aurora.py
```

<!--custom.scenarios.aurora_Scenario_GetStartedClusters.start-->
<!--custom.scenarios.aurora_Scenario_GetStartedClusters.end-->

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../../README.md#Tests)
in the `python` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

* [Aurora User Guide](https://docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/CHAP_AuroraOverview.html)
* [Aurora API Reference](https://docs.aws.amazon.com/AmazonRDS/latest/APIReference/Welcome.html)
* [SDK for Python Aurora reference](https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/rds.html)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0