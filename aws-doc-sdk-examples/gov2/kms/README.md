<!--Generated by WRITEME on 2023-04-05 00:19:28.206377 (UTC)-->
# AWS KMS code examples for the SDK for Go V2

## Overview

Shows how to use the AWS SDK for Go V2 to work with AWS Key Management Service (AWS KMS).

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
### Single actions

Code excerpts that show you how to call individual service functions.

* [Create a key](CreateKey/CreateKeyv2.go#L3) (`CreateKey`)
* [Decrypt ciphertext](DecryptData/DecryptDatav2.go#L3) (`Decrypt`)
* [Encrypt text using a key](EncryptData/EncryptDatav2.go#L3) (`Encrypt`)
* [Recencrypt ciphertext from one key to another](ReEncryptData/ReEncryptDatav2.go#L3) (`ReEncrypt`)

## Run the examples

### Prerequisites


For prerequisites, see the [README](../README.md#Prerequisites) in the `gov2` folder.



<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->


#### Run an action

All actions can be run at a command prompt. To get instructions for a specific
example, pass the `-h` flag. For example:

```
go run ./EncryptData -h
```

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../README.md#Tests)
in the `gov2` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

* [AWS KMS Developer Guide](https://docs.aws.amazon.com/kms/latest/developerguide/overview.html)
* [AWS KMS API Reference](https://docs.aws.amazon.com/kms/latest/APIReference/Welcome.html)
* [SDK for Go V2 AWS KMS reference](https://pkg.go.dev/github.com/aws/aws-sdk-go-v2/service/kms)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0