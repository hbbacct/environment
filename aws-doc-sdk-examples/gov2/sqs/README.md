<!--Generated by WRITEME on 2023-04-05 00:19:50.215621 (UTC)-->
# Amazon SQS code examples for the SDK for Go V2

## Overview

Shows how to use the AWS SDK for Go V2 to work with Amazon Simple Queue Service (Amazon SQS).

<!--custom.overview.start-->
<!--custom.overview.end-->

*Amazon SQS is a fully managed message queuing service that makes it easy to decouple and scale microservices, distributed systems, and serverless applications.*

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

* [Change message timeout visibility](ChangeMsgVisibility/ChangeMsgVisibilityv2.go#L3) (`ChangeMessageVisibility`)
* [Create a queue](CreateQueue/CreateQueuev2.go#L3) (`CreateQueue`)
* [Delete a message from a queue](DeleteMessage/DeleteMessagev2.go#L3) (`DeleteMessage`)
* [Delete a queue](DeleteQueue/DeleteQueuev2.go#L3) (`DeleteQueue`)
* [Get the URL of a queue](GetQueueURL/GetQueueURLv2.go#L3) (`GetQueueUrl`)
* [List queues](ListQueues/ListQueuesv2.go#L3) (`ListQueues`)
* [Receive messages from a queue](ReceiveMessage/ReceiveMessagev2.go#L3) (`ReceiveMessage`)
* [Send a message to a queue](SendMessage/SendMessagev2.go#L3) (`SendMessage`)

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
go run ./CreateQueue -h
```

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../README.md#Tests)
in the `gov2` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

* [Amazon SQS Developer Guide](https://docs.aws.amazon.com/AWSSimpleQueueService/latest/SQSDeveloperGuide/welcome.html)
* [Amazon SQS API Reference](https://docs.aws.amazon.com/AWSSimpleQueueService/latest/APIReference/Welcome.html)
* [SDK for Go V2 Amazon SQS reference](https://pkg.go.dev/github.com/aws/aws-sdk-go-v2/service/sqs)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0