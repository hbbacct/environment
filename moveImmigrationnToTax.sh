#!/bin/bash
sudo rm -rf dfytax/*
sudo rm -rf dfytaxExtras/*
sudo cp -a dfyimmigration/. dfytax/
sudo cp -a dfyimmigrationExtras/. dfytaxExtras/
sudo find dfytax -type f -exec sed -i 's/dfyimmigration/dfytax/g' {} +
sudo find dfytaxExtras -type f -exec sed -i 's/dfyimmigration/dfytax/g' {} +
sudo find dfytax -depth -name "*dfyimmigration*" -execdir bash -c 'mv "$1" "${1//dfyimmigration/dfytax}"' _ {} \;                          
sudo find dfytaxExtras -depth -name "*dfyimmigration*" -execdir bash -c 'mv "$1" "${1//dfyimmigration/dfytax}"' _ {} \;                   $




