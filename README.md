# Extension in2help

## What does it do?

The extension adds an additional module to the help section in the backend of
your installtion. You can define a page ID, which is loaded into this module.
The idea is, that you can provide your editors an entry point, into the 
editors documentation. 

Basically you write the documentation about content elements and functions in
the backend and use the frontend rendering to display it.

## Configuration

The extension configuration can be set up in the extension configuration.

TYPO3 V8: Extension Manager -> in2help -> Settings
TYPO3 V9 or newer: Settings -> Extension Configuration -> in2help

Options:
* PID of Pattern Page: basic.designPatternPid (int+) -> the PID of the page which 
contains the Design Pattern. This a page in the page tree, which is the entry
point to the editors documentation.
* FE-Domain: basic.domain (text): Add a domain for the frontend rendering
(optional if FE domain is different to BE domain - e.g. https://www.domain.org/)

## Tips

### Adjust page rendering

In order to provide the best experience for your editors, you should try to keep
the header of your layout small. You could hide elements, which are just
ornaments.

### Provide user / page TS to set this module as starting point

You can set up PageTS or UserTS to force users, to get this module as start 
module.

setup.override.startModule = help_In2helpM1

## Changelog

| Version    | Date       | State      | Description                                                                  |
| ---------- | ---------- | ---------- | ---------------------------------------------------------------------------- |
| 4.0.0      | 2019-04-08 | Task       | Release for TYPO3 9.5                                                        |
