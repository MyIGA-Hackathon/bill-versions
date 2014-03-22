#!/bin/bash

# SAMPLE CURL TO GET JSON

curl -i \
    -k \
    -X GET \
    -H "Accept: application/vnd.myiga.v1+json" \
    -H "Authorization: Token YOUR TOKEN HERE" \
    "https://api.iga.in.gov/2014/bills/sb0001"
