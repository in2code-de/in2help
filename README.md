# Extension in2help

## What does it do?

The extension adds a module to the help section in the backend of
your installation. You can define a page ID, which is loaded into this module.
The idea is, that you can provide your editors an entry point, into the
editors documentation.

Basically you write the documentation about content elements and functions in
the backend and use the frontend rendering to display it.

## Screenshots

![screenshot_module.png](Documentation/Images/screenshot_module.png "Show a documentation in the backend of TYPO3")

## Configuration

The extension configuration can be set up in the extension configuration.

Options:
* PID of help page: basic.helpPid (int+) -> the PID of the page which
contains the documentation.

## Tips

### Adjust page rendering

In order to provide the best experience for your editors, you should try to keep
the header of your layout small. You could hide elements, which are just
ornaments.

### Provide user / page TS to set this module as starting point

You can set up PageTS or UserTS to force users, to get this module as start
module.

setup.override.startModule = web_in2help

## Contribution with ddev

This repository provides a [DDEV]()-backed development environment. If DDEV is installed, simply run the following
commands to quickly set up a local environment with example usages:

* `ddev start`
* `ddev initialize`

### Requirements

1. Install ddev, see: https://ddev.readthedocs.io/en/stable/#installation
2. Install git-lfs, see: https://git-lfs.github.com/

### Installation

1. Clone this repository
2. Run `ddev start`
3. Run `ddev initialize` to setup configurations and test database

## Branchinfo

* master Branch - Next Major Version

## Early Access Programm for TYPO3 14 support

:information_source: **TYPO3 14 compatibility**
> See [EAP page (DE)](https://www.in2code.de/agentur/typo3-extensions/early-access-programm/) or
> [EAP page (EN)](https://www.in2code.de/en/agency/typo3-extensions/early-access-program/) for more information how
> to get access to a TYPO3 14 version

## Changelog

| Version   | Date       | State  | Description                                            |
|-----------|------------|--------|--------------------------------------------------------|
| 13.0.0    | 2025-08-08 | Task | Release for TYPO3 v13                                    |
| 7.0.1     | 2024-10-02 | Bugfix | Make module accessible for normal editors              |
| 7.0.0     | 2023-02-27 | Task   | Release for TYPO3 v12                                  |
| 6.0.1     | 2022-06-23 | Bugfix | Remove vendor name from registerModule                 |
| 6.0.0 !!! | 2022-06-23 | Task   | Support for TYPO3 11 and 10 (9 is dropped now)         |
| 5.0.1     | 2021-05-19 | Task   | Add github workflow; add extensionkey to composer.json |
| 5.0.0     | 2020-04-24 | Task   | Release for TYPO3 10.4                                 |
| 4.0.0     | 2019-04-08 | Task   | Release for TYPO3 9.5                                  |

## Breaking changes

### Updating fom earlier versions to 6

We just changed the configuration key in LocalConfiguration.php from `designPatternPid` to `helpPid` because this
extension is used to show documentations while it was once created to show a designPattern.
