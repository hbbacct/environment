<!--Generated by WRITEME on 2023-03-29 13:24:55.530150 (UTC)-->
# Amazon SNS code examples for the SDK for C++

## Overview

Shows how to use the AWS SDK for C++ to work with Amazon Simple Notification Service (Amazon SNS).

<!--custom.overview.start-->
<!--custom.overview.end-->

*Amazon SNS is a web service that enables applications, end-users, and devices to instantly send and receive notifications from the cloud.*

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

* [Create a topic](create_topic.cpp#L23) (`CreateTopic`)
* [Delete a subscription](unsubscribe.cpp#L23) (`Unsubscribe`)
* [Delete a topic](delete_topic.cpp#L23) (`DeleteTopic`)
* [Get the properties of a topic](get_topic_attributes.cpp#L25) (`GetTopicAttributes`)
* [Get the settings for sending SMS messages](get_sms_type.cpp#L23) (`GetSMSAttributes`)
* [List the subscribers of a topic](list_subscriptions.cpp#L23) (`ListSubscriptions`)
* [List topics](list_topics.cpp#L23) (`ListTopics`)
* [Publish an SMS text message](publish_sms.cpp#L23) (`Publish`)
* [Publish to a topic](publish_to_topic.cpp#L23) (`Publish`)
* [Set the default settings for sending SMS messages](set_sms_type.cpp#L24) (`SetSmsAttributes`)
* [Subscribe a Lambda function to a topic](subscribe_lambda.cpp#L23) (`Subscribe`)
* [Subscribe a mobile application to a topic](subscribe_app.cpp#L23) (`Subscribe`)
* [Subscribe an email address to a topic](subscribe_email.cpp#L18) (`Subscribe`)

## Run the examples

### Prerequisites



Before using the code examples, first complete the installation and setup steps
for [Getting started](https://docs.aws.amazon.com/sdk-for-cpp/v1/developer-guide/getting-started.html) in the AWS SDK for
C++ Developer Guide.
This section covers how to get and build the SDK, and how to build your own code by using the SDK with a
sample Hello World-style application.

Next, for information on code example structures and how to build and run the examples, see [Getting started with the AWS SDK for C++ code examples](https://docs.aws.amazon.com/sdk-for-cpp/v1/developer-guide/getting-started-code-examples.html).


<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->


### Tests

⚠ Running tests might result in charges to your AWS account.



```sh
   cd <BUILD_DIR>
   cmake <path-to-root-of-this-source-code> -DBUILD_TESTS=ON
   make
   ctest
```


<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

* [Amazon SNS Developer Guide](https://docs.aws.amazon.com/sns/latest/dg/welcome.html)
* [Amazon SNS API Reference](https://docs.aws.amazon.com/sns/latest/api/welcome.html)
* [SDK for C++ Amazon SNS reference](https://sdk.amazonaws.com/cpp/api/LATEST/aws-cpp-sdk-sns/html/annotated.html)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0