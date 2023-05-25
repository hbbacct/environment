#!/bin/bash
sudo rm -rf dfyimmigration/*
sudo rm -rf dfyimmigrationExtras/*
sudo cp -a dfytax/. dfyimmigration/
sudo cp -a dfytaxExtras/. dfyimmigrationExtras/
sudo find dfyimmigration -type f -exec sed -i 's/dfytax/dfyimmigration/g' {} +
sudo find dfyimmigrationExtras -type f -exec sed -i 's/dfytax/dfyimmigration/g' {} +
sudo find dfyimmigration -depth -name "*dfytax*" -execdir bash -c 'mv "$1" "${1//dfytax/dfyimmigration}"' _ {} \;                          
sudo find dfyimmigrationExtras -depth -name "*dfytax*" -execdir bash -c 'mv "$1" "${1//dfytax/dfyimmigration}"' _ {} \;                     

