# frozen_string_literal: true

# Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.
# SPDX-License-Identifier: Apache-2.0

require "yaml"
require "aws-sdk-rdsdataservice"
require_relative "../../src/aurora"

# A simple class for creating items in the database.
class PopulateTable
  def initialize
    client = Aws::RDSDataService::Client.new
    config = YAML.safe_load(File.open(File.join(File.dirname(__FILE__), "./../", "config.yml")))
    @wrapper = AuroraActions.new(config, client)
  end

  def add_records
    10.times do
      username = ["ltolstoy", "jsteinbeck", "jkerouac", "wkhalifa"].sample
      item_data = {
        description: ["New feature", "Quick bugfix", "User research", "Tech debt"].sample,
        guide: ["cpp", "python", "go", "ruby", "dotnet", "js", "php"].sample,
        status: ["backlog", "icebox", "unrefined", "done", "in-progress"].sample,
        username: username,
        name: username,
        archived: [0, 1].sample
      }
      @wrapper.add_work_item(item_data)
    end
  end
end

if __FILE__ == $0
    # Checks for Aurora DB cluster & creates table if none exists.
  begin
    setup = PopulateTable.new
    setup.add_records
  rescue StandardError => e
    raise "Failed while creating new database records:\n#{e}"
  end
end
