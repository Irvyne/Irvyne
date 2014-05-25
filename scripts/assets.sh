#!/bin/bash

. $(dirname $0)/config.sh

$ENV $CONSOLE assets:install --symlink &&
$ENV $CONSOLE assetic:dump &&
$ENV $CONSOLE braincrafted:bootstrap:install
