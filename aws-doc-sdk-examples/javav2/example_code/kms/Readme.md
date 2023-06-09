<!--Generated by WRITEME on 2023-04-19 11:13:20.281974 (UTC)-->
# AWS KMS code examples for the SDK for Java 2.x

## Overview

Shows how to use the AWS SDK for Java 2.x to work with AWS Key Management Service (AWS KMS).

<!--custom.overview.start-->
<!--custom.overview.end-->

*AWS KMS is an encryption and key management service scaled for the cloud.*

## ⚠ Important

* Running this code might result in charges to your AWS account.
* Running the tests might result in charges to your AWS account.
* We recommend that you grant your code least privilege. At most, grant only the minimum permissions required to perform the task. For more information, see [Grant least privilege](https://docs.aws.amazon.com/IAM/latest/UserGuide/best-practices.html#grant-least-privilege).
* This code is not tested in every AWS Region. For more information, see [AWS Regional Services](https://aws.amazon.com/about-aws/global-infrastructure/regional-product-services).

<!--custom.important.start-->
<!--custom.important.end-->

## Code examples

### Prerequisites

For prerequisites, see the [README](../../README.md#Prerequisites) in the `javav2` folder.


<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Single actions

Code excerpts that show you how to call individual service functions.

* [Create a grant for a key](src/main/java/com/example/kms/CreateGrant.java#L58) (`CreateGrant`)
* [Create a key](src/main/java/com/example/kms/CreateCustomerKey.java#L44) (`CreateKey`)
* [Create an alias for a key](src/main/java/com/example/kms/CreateAlias.java#L55) (`CreateAlias`)
* [Decrypt ciphertext](src/main/java/com/example/kms/EncryptDataKey.java#L86) (`Decrypt`)
* [Describe a key](src/main/java/com/example/kms/DescribeKey.java#L55) (`DescribeKey`)
* [Disable a key](src/main/java/com/example/kms/DisableCustomerKey.java#L53) (`DisableKey`)
* [Enable a key](src/main/java/com/example/kms/EnableCustomerKey.java#L52) (`EnableKey`)
* [Encrypt text using a key](src/main/java/com/example/kms/EncryptDataKey.java#L59) (`Encrypt`)
* [List aliases for a key](src/main/java/com/example/kms/ListAliases.java#L44) (`ListAliases`)
* [List grants for a key](src/main/java/com/example/kms/ListGrants.java#L55) (`ListGrants`)
* [List keys](src/main/java/com/example/kms/ListKeys.java#L44) (`ListKeys`)

## Run the examples

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->



### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../../README.md#Tests)
in the `javav2` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

* [AWS KMS Developer Guide](https://docs.aws.amazon.com/kms/latest/developerguide/overview.html)
* [AWS KMS API Reference](https://docs.aws.amazon.com/kms/latest/APIReference/Welcome.html)
* [SDK for Java 2.x AWS KMS reference](https://sdk.amazonaws.com/java/api/latest/software/amazon/awssdk/services/kms/package-summary.html)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0