<!--Generated by WRITEME on 2023-04-12 00:07:41.519710 (UTC)-->
# Amazon EMR code examples for the SDK for Python

## Overview

Shows how to use the AWS SDK for Python (Boto3) to work with Amazon EMR.

<!--custom.overview.start-->
<!--custom.overview.end-->

*Amazon EMR is a web service that makes it easy to process vast amounts of data efficiently using Apache Hadoop and services offered by Amazon Web Services.*

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

* [Add steps to a job flow](emr_basics.py#L128) (`AddJobFlowSteps`)
* [Describe a cluster](emr_basics.py#L89) (`DescribeCluster`)
* [Describe a step](emr_basics.py#L185) (`DescribeStep`)
* [List steps for a cluster](emr_basics.py#L163) (`ListSteps`)
* [Run a job flow](emr_basics.py#L18) (`RunJobFlow`)
* [Terminate job flows](emr_basics.py#L110) (`TerminateJobFlows`)

### Scenarios

Code examples that show you how to accomplish a specific task by calling multiple
functions within the same service.

* [Create a long-lived Amazon EMR cluster and run steps](emr_usage_demo.py) 
* [Create a short-lived Amazon EMR cluster and run a step](emr_usage_demo.py) 
* [Run a shell script to install libraries](install_libraries.py) 

## Run the examples

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->



#### Create a long-lived Amazon EMR cluster and run steps

This example shows you how to create a long-lived Amazon EMR cluster and run several steps.


<!--custom.scenario_prereqs.emr_Scenario_LongLivedEmrCluster.start-->
<!--custom.scenario_prereqs.emr_Scenario_LongLivedEmrCluster.end-->

Start the example by running the following at a command prompt:

```
python emr_usage_demo.py
```

<!--custom.scenarios.emr_Scenario_LongLivedEmrCluster.start-->
Shows how to write a job step that uses Apache Spark to read data from the
[Amazon Customer Reviews Dataset](https://s3.amazonaws.com/amazon-reviews-pds/readme.html)
and query the data for top-rated products in specific categories that contain 
keywords in their product titles. Results are written to an Amazon Simple Storage 
Service (Amazon S3) bucket.
<!--custom.scenarios.emr_Scenario_LongLivedEmrCluster.end-->

#### Create a short-lived Amazon EMR cluster and run a step

This example shows you how to create a short-lived Amazon EMR cluster that runs a step and automatically terminates after the step completes.


<!--custom.scenario_prereqs.emr_Scenario_ShortLivedEmrCluster.start-->
<!--custom.scenario_prereqs.emr_Scenario_ShortLivedEmrCluster.end-->

Start the example by running the following at a command prompt:

```
python emr_usage_demo.py
```

<!--custom.scenarios.emr_Scenario_ShortLivedEmrCluster.start-->
Shows how to write a job step that uses Apache Spark to estimate the value of pi by 
performing a large number of parallelized calculations on cluster instances. Results
are written to Amazon EMR logs and also to an S3 bucket. 
<!--custom.scenarios.emr_Scenario_ShortLivedEmrCluster.end-->

#### Run a shell script to install libraries

This example shows you how to use AWS Systems Manager to run a shell script on Amazon EMR instances that installs additional libraries. This way, you can automate instance management instead of running commands manually through an SSH connection.


<!--custom.scenario_prereqs.emr_Usage_InstallLibrariesWithSsm.start-->
<!--custom.scenario_prereqs.emr_Usage_InstallLibrariesWithSsm.end-->

<!--custom.scenarios.emr_Usage_InstallLibrariesWithSsm.start-->
To install additional libraries on running cluster instances, run the following
command at a command prompt:

```
python install_libraries.py CLUSTER_ID SHELL_SCRIPT_PATH
``` 

This example is intended to be run as part of the tutorial in 
[Installing Additional Kernels and Libraries](https://docs.aws.amazon.com/emr/latest/ReleaseGuide/emr-jupyterhub-install-kernels-libs.html). 
The cluster specified by *CLUSTER_ID* must be set up to work with
Systems Manager. You must also have previously uploaded a shell script
to the Amazon S3 location specified by *SHELL_SCRIPT_PATH*. 
<!--custom.scenarios.emr_Usage_InstallLibrariesWithSsm.end-->

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../../README.md#Tests)
in the `python` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

* [Amazon EMR Management Guide](https://docs.aws.amazon.com/emr/latest/ManagementGuide/emr-what-is-emr.html)
* [Amazon EMR API Reference](https://docs.aws.amazon.com/emr/latest/APIReference/Welcome.html)
* [SDK for Python Amazon EMR reference](https://boto3.amazonaws.com/v1/documentation/api/latest/reference/services/emr.html)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0