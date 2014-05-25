#!/bin/bash

. $(dirname $0)/config.sh

$ENV $CONSOLE cache:clear --env=dev &&
$ENV $CONSOLE cache:clear --env=prod --no-debug
