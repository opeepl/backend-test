## Introduction

This repository contains a skeleton of an exchange-rate library.

The task is to complete the library, so that the methods defined in ExchangeRateService are completed.
Testcases should probably also be improved and expanded upon.

Focus should be on writing good code, not adding the most features possible.

The code should use this API: https://exchangeratesapi.io/.

Delivery should either be a fork of the repository or a zipfile containing the entire repository.

Estimation for the task is around 2 hours.
Additional features and suggestions that didn't make it into the code can be explained and put in a txt file.

## Things To Consider

- We want to keep the number of calls to the API to a minimum - also across multiple php processes.
- We want it to be easy to switch to another exchange rate API.
- We want to be able to support multiple APIs AT THE SAME TIME. For instance adding an API that has cryptocurrency exchange rates.
- We want to be able to support exchanging between currencies defined in separate exchange rate APIs. What are the requirements for doing that?

## Getting Started

Make sure you have composer installed.

Run `composer install` to install required dependencies.

To see if your code works as expected, some testcases have been created for you. They are under the `tests/` directory.

To run the tests call `composer test`

## Limitations

You are allowed to make use of any libraries you want, but no libraries directly related to exchange rates.
