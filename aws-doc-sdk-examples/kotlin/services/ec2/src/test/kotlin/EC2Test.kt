/*
   Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
   SPDX-License-Identifier: Apache-2.0
*/

import com.kotlin.ec2.DASHES
import com.kotlin.ec2.allocateAddressSc
import com.kotlin.ec2.associateAddressSc
import com.kotlin.ec2.createEC2Instance
import com.kotlin.ec2.createEC2KeyPair
import com.kotlin.ec2.createEC2SecurityGroup
import com.kotlin.ec2.createEC2SecurityGroupSc
import com.kotlin.ec2.createKeyPairSc
import com.kotlin.ec2.deleteEC2SecGroup
import com.kotlin.ec2.deleteEC2SecGroupSc
import com.kotlin.ec2.deleteKeys
import com.kotlin.ec2.deleteKeysSc
import com.kotlin.ec2.describeEC2Account
import com.kotlin.ec2.describeEC2Address
import com.kotlin.ec2.describeEC2Instances
import com.kotlin.ec2.describeEC2InstancesSc
import com.kotlin.ec2.describeEC2Keys
import com.kotlin.ec2.describeEC2KeysSc
import com.kotlin.ec2.describeEC2RegionsAndZones
import com.kotlin.ec2.describeEC2SecurityGroups
import com.kotlin.ec2.describeEC2Vpcs
import com.kotlin.ec2.describeImageSc
import com.kotlin.ec2.describeSecurityGroupsSc
import com.kotlin.ec2.disassociateAddressSc
import com.kotlin.ec2.findRunningEC2Instances
import com.kotlin.ec2.getInstanceTypesSc
import com.kotlin.ec2.getParaValuesSc
import com.kotlin.ec2.releaseEC2AddressSc
import com.kotlin.ec2.runInstanceSc
import com.kotlin.ec2.startInstanceSc
import com.kotlin.ec2.stopInstanceSc
import com.kotlin.ec2.terminateEC2
import com.kotlin.ec2.terminateEC2Sc
import kotlinx.coroutines.runBlocking
import org.junit.jupiter.api.Assertions.assertTrue
import org.junit.jupiter.api.BeforeAll
import org.junit.jupiter.api.MethodOrderer.OrderAnnotation
import org.junit.jupiter.api.Order
import org.junit.jupiter.api.Test
import org.junit.jupiter.api.TestInstance
import org.junit.jupiter.api.TestMethodOrder
import java.io.IOException
import java.util.Properties

@TestInstance(TestInstance.Lifecycle.PER_CLASS)
@TestMethodOrder(OrderAnnotation::class)
class EC2Test {
    private var instanceId = "" // Gets set in test 2.
    private var ami = ""
    private var instanceName = ""
    private var keyName = ""
    private var groupName = ""
    private var groupDesc = ""
    private var groupId = ""
    private var vpcId = ""

    private var keyNameSc = ""
    private var fileNameSc = ""
    private var groupNameSc = ""
    private var groupDescSc = ""
    private var vpcIdSc = ""
    private var myIpAddressSc = ""

    @BeforeAll
    @Throws(IOException::class)
    fun setUp() {
        try {
            EC2Test::class.java.classLoader.getResourceAsStream("config.properties").use { input ->
                val prop = Properties()
                if (input == null) {
                    println("Sorry, unable to find config.properties")
                    return
                }
                prop.load(input)

                // Populate the data members required for all tests.
                ami = prop.getProperty("ami")
                instanceName = prop.getProperty("instanceName")
                keyName = prop.getProperty("keyName")
                groupName = prop.getProperty("groupName")
                groupDesc = prop.getProperty("groupDesc")
                vpcId = prop.getProperty("vpcId")

                keyNameSc = prop.getProperty("keyNameSc")
                fileNameSc = prop.getProperty("fileNameSc")
                groupDescSc = prop.getProperty("groupDescSc")
                groupNameSc = prop.getProperty("groupNameSc")
                vpcIdSc = prop.getProperty("vpcIdSc")
                myIpAddressSc = prop.getProperty("myIpAddressSc")
            }
        } catch (ex: IOException) {
            ex.printStackTrace()
        }
    }

    @Test
    @Order(1)
    fun createInstanceTest() = runBlocking {
        instanceId = createEC2Instance(instanceName, ami).toString()
        assertTrue(instanceId.isNotEmpty())
        println("Test 2 passed")
    }

    @Test
    @Order(2)
    fun createKeyPairTest() = runBlocking {
        createEC2KeyPair(keyName)
        println("Test 3 passed")
    }

    @Test
    @Order(3)
    fun describeKeyPairTest() = runBlocking {
        describeEC2Keys()
        println("Test 4 passed")
    }

    @Test
    @Order(4)
    fun deleteKeyPairTest() = runBlocking {
        deleteKeys(keyName)
        println("Test 5 passed")
    }

    @Test
    @Order(5)
    fun createSecurityGroupTest() = runBlocking {
        groupId = createEC2SecurityGroup(groupName, groupDesc, vpcId).toString()
        assertTrue(groupId.isNotEmpty())
        println("Test 6 passed")
    }

    @Test
    @Order(6)
    fun describeSecurityGroupTest() = runBlocking {
        describeEC2SecurityGroups(groupId)
        println("Test 7 passed")
    }

    @Test
    @Order(7)
    fun deleteSecurityGroupTest() = runBlocking {
        deleteEC2SecGroup(groupId)
        println("Test 8 passed")
    }

    @Test
    @Order(8)
    fun describeAccountTest() = runBlocking {
        describeEC2Account()
        println("Test 9 passed")
    }

    @Test
    @Order(9)
    fun describeInstancesTest() = runBlocking {
        describeEC2Instances()
        println("Test 10 passed")
    }

    @Test
    @Order(10)
    fun describeRegionsAndZonesTest() = runBlocking {
        describeEC2RegionsAndZones()
        println("Test 11 passed")
    }

    @Test
    @Order(11)
    fun describeVPCsTest() = runBlocking {
        describeEC2Vpcs(vpcId)
        println("Test 12 passed")
    }

    @Test
    @Order(12)
    fun findRunningInstancesTest() = runBlocking {
        findRunningEC2Instances()
        println("Test 13 passed")
    }

    @Test
    @Order(13)
    fun describeAddressesTest() = runBlocking {
        describeEC2Address()
        println("Test 14 passed")
    }

    @Test
    @Order(14)
    fun terminateInstanceTEst() = runBlocking {
        terminateEC2(instanceId)
        println("Test 15 passed")
    }

    @Test
    @Order(15)
    fun TestEC2Scenario() = runBlocking {
        var newInstanceId: String
        println(DASHES)
        println("1. Create an RSA key pair and save the private key material as a .pem file.")
        createKeyPairSc(keyNameSc, fileNameSc)
        println(DASHES)

        println(DASHES)
        println("2. List key pairs.")
        describeEC2KeysSc()
        println(DASHES)

        println(DASHES)
        println("3. Create a security group.")
        val groupId = createEC2SecurityGroupSc(groupNameSc, groupDescSc, vpcIdSc, myIpAddressSc)
        groupId?.let { assertTrue(it.isNotEmpty()) }
        println(DASHES)

        println(DASHES)
        println("4. Display security group info for the newly created security group.")
        describeSecurityGroupsSc(groupId.toString())
        println(DASHES)

        println(DASHES)
        println("5. Get a list of Amazon Linux 2 AMIs and select one with amzn2 in the name.")
        val instanceId = getParaValuesSc()
        instanceId?.let { assertTrue(it.isNotEmpty()) }
        println("The instance ID is $instanceId")
        println(DASHES)

        println(DASHES)
        println("6. Get more information about an amzn2 image and return the AMI value.")
        val amiValue = instanceId?.let { describeImageSc(it) }
        amiValue?.let { assertTrue(it.isNotEmpty()) }
        println("The AMI value is $amiValue.")
        println(DASHES)

        println(DASHES)
        println("7. Get a list of instance types.")
        val instanceType = getInstanceTypesSc()
        assertTrue(instanceType.isNotEmpty())
        println(DASHES)

        println(DASHES)
        println("8. Create an instance.")
        newInstanceId = runInstanceSc(instanceType, keyNameSc, groupNameSc, amiValue.toString())
        assertTrue(newInstanceId.isNotEmpty())
        println(DASHES)

        println(DASHES)
        println("9. Display information about the running instance.")
        var ipAddress = describeEC2InstancesSc(newInstanceId)
        assertTrue(ipAddress.isNotEmpty())
        println("You can SSH to the instance using this command:")
        println("ssh -i " + fileNameSc + "ec2-user@" + ipAddress)
        println(DASHES)

        println(DASHES)
        println("10.  Stop the instance.")
        stopInstanceSc(newInstanceId)
        println(DASHES)

        println(DASHES)
        println("11.  Start the instance.")
        startInstanceSc(newInstanceId)
        ipAddress = describeEC2InstancesSc(newInstanceId)
        ipAddress.let { assertTrue(it.isNotEmpty()) }
        println("You can SSH to the instance using this command:")
        println("ssh -i " + fileNameSc + "ec2-user@" + ipAddress)
        println(DASHES)

        println(DASHES)
        println("12. Allocate an Elastic IP and associate it with the instance.")
        val allocationId = allocateAddressSc()
        allocationId?.let { assertTrue(it.isNotEmpty()) }
        val associationId = associateAddressSc(newInstanceId, allocationId)
        associationId?.let { assertTrue(it.isNotEmpty()) }
        println("The associate Id value is $associationId")
        println(DASHES)

        println(DASHES)
        println("13. Describe the instance again.")
        ipAddress = describeEC2InstancesSc(newInstanceId)
        ipAddress.let { assertTrue(it.isNotEmpty()) }
        println("You can SSH to the instance using this command:")
        println("ssh -i " + fileNameSc + "ec2-user@" + ipAddress)
        println(DASHES)

        println(DASHES)
        println("14. Disassociate and release the Elastic IP address.")
        disassociateAddressSc(associationId)
        releaseEC2AddressSc(allocationId)
        println(DASHES)

        println(DASHES)
        println("15. Terminate the instance and use a waiter.")
        terminateEC2Sc(newInstanceId)
        println(DASHES)

        println(DASHES)
        println("16. Delete the security group.")
        if (groupId != null) {
            deleteEC2SecGroupSc(groupId)
        }
        println(DASHES)

        println(DASHES)
        println("17. Delete the key pair.")
        deleteKeysSc(keyNameSc)
        println(DASHES)
    }
}
