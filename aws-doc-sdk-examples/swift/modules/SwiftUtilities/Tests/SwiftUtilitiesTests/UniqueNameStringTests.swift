/*
   Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
   SPDX-License-Identifier: Apache-2.0
*/

import XCTest
@testable import SwiftUtilities

final class UniqueNameStringTests: XCTestCase {
    /// Test to confirm that calling uniqueName() with no
    /// inputs returns a lowercased UUID.
    func testSimpleUniqueName() {
        let ts = String.uniqueName()
        XCTAssertTrue(ts.lowercased() == ts)

        let tsUUID = UUID(uuidString: String.uniqueName())
        XCTAssertNotNil(tsUUID)
    }

    /// Confirm that the `withPrefix` property works by checking that the
    /// returned value has the following properties:
    ///
    /// * Is non-nil.
    /// * Starts with the specified prefix.
    /// * When the prefix is removed, has a valid lowercased UUID.
    func testUniqueNamePrefixed() {
        let prefix = "prefix"
        let ts = String.uniqueName(withPrefix: prefix)
        XCTAssertNotNil(ts)

        XCTAssertTrue(ts.hasPrefix("\(prefix)-"))

        let lcUUID = ts.dropFirst(prefix.count+1)
        XCTAssertTrue(lcUUID.lowercased() == lcUUID)

        XCTAssertNotNil(UUID(uuidString: lcUUID.uppercased()))
    }

    /// Confirm that the `withExtension` property works by checking that the
    /// returned value has the following properties:
    ///
    /// * Is non-nil.
    /// * Ends with a period followed by the extension.
    /// * When the extension and period are removed, has a valid lowercased
    ///   UUID.
    func testUniqueNameWithExtension() {
        let ext = "txt"
        let ts = String.uniqueName(withExtension: ext)
        XCTAssertNotNil(ts)

        XCTAssertTrue(ts.hasSuffix(".\(ext)"))

        let lcUUID = ts.dropLast(ext.count+1)
        XCTAssertTrue(lcUUID.lowercased() == lcUUID)

        XCTAssertNotNil(UUID(uuidString: lcUUID.uppercased()))
    }

    /// Confirm that the `maxDigits` property works by verifying that the
    /// returned string has the expected number of characters when no prefix
    /// or extension is provided.
    func testUniqueNameWithMaxDigits() {
        let ts = String.uniqueName(maxDigits: 8)

        XCTAssertEqual(ts.count, 8, "Length of returned name doesn't equal expected value.")
    }

    /// Confirm that the `maxDigits` property is properly pinned to the length
    /// of the UUID.
    func testUniqueNameWithHugeMaxDigits() {
        let ts = String.uniqueName(maxDigits: 256)

        XCTAssertEqual(ts.count, 36, "Expected entire 36-character UUID but did not get it.")
    }

    /// Confirm that when both the `prefix` and `maxDigits` properties are
    /// provided, the returned string is the expected length, which is the sum
    /// of:
    ///
    /// * The prefix length.
    /// * 1 (the dash separating the prefix from the UUID portion of the
    ///   name).
    /// * The length of the portion of the UUID expected to be in the response
    ///   (8).
    func testUniqueNameWithMaxDigitsAndPrefix() {
        let prefix = "Prefix"
        let ts = String.uniqueName(withPrefix: prefix, maxDigits: 8)
        XCTAssertNotNil(ts)

        let expectedLength = 1 + prefix.count + 8
        XCTAssertEqual(ts.count, expectedLength, "Length of returned name doesn't equal expected value.")
    }

    /// Confirm that the string returned matches expectations when both the
    /// `maxDigits` and `extension` properties are used:
    ///
    /// * Result is not `nil`.
    /// * The returned string ends with the a period followed by the expected
    ///   extension.
    /// * The length of the string matches the specified maximum number of
    ///   digits plus the length of the extension plus one (for the period).
    func testUniqueNameWithMaxDigitsAndExtension() {
        let ext = "pdf"
        let ts = String.uniqueName(maxDigits: 10, withExtension: ext)
        XCTAssertNotNil(ts)

        XCTAssertTrue(ts.hasSuffix(".\(ext)"), "Returned name is missing the extension.")

        let expectedLength = 10 + 1 + ext.count
        XCTAssertEqual(ts.count, expectedLength, "Length of returned string doesn't equal expected value.")
    }

    /// Confirm that the `isValid` property works by checking that, when
    /// false, the returned value has the following properties:
    ///
    /// * Is non-nil.
    /// * Starts with the prefix that invalidates the name
    /// * When the prefix is removed, has a valid lowercased UUID.
    func testInvalidUniqueName() {
        let invalidatePrefix = ",12%"
        let ts = String.uniqueName(isValid: false)
        XCTAssertNotNil(ts)

        XCTAssertTrue(ts.hasPrefix(invalidatePrefix))

        let uuidStr = String(ts.dropFirst(invalidatePrefix.count))
        XCTAssertTrue(uuidStr.uppercased() == uuidStr)

        XCTAssertNotNil(UUID(uuidString: uuidStr))
    }
}
