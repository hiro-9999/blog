# Solidity Programming Essentials 🔴
https://github.com/PacktPublishing/Solidity-Programming-Essentials-Second-Edition


development tooling such as Truffle and Ganache. Before Web3,

# remix
https://remix.ethereum.org.
```
　CTRL + S: Compile the current contract

  Ctrl + Shift + F : Open the File Explorer

  Ctrl + Shift + A : Open the Plugin Manager

  CTRL + SHIFT + S: Compile the current contract & Run an associated script
```
https://github.com/PacktPublishing/Solidity-Programming-Essentials-Second-Edition

# web3.js v1.5.3


# cryptography
Asymmetric cryptography　// Symmetric cryptography

#### Hashing -- root transaction (Keccak256 = SHA3 not SHA-256)
transaction Merkle root hash

#### Digital signatures
Alice creates a hash of the entire payload and encrypts the hash with her private key. She appends the resultant digital signature to the hash and transmits it to Tom. When the transaction reaches Tom, he extracts the digital signature and decrypts it using Alice's public key to find the original hash. 

so you'll also learn about hash, encryption, and the usage of keys for creating transactions and accounts. How transactions and accounts are created, how gas is paid for each transaction, the difference between message calls and transactions, and the storage of code and state management will be explained in detail.

Ether, gas, and transactions


#### Ethereum Virtual Machine (EVM)
miner, block, transaction, consensus algorithm, account, smart contract, mining, Ether, and gas

##### Consensus
Ethereum 2.0 is changing its consensus algorithm to the Proof-of-Stake (PoS) consensus algorithm.
These nodes use a peer-to-peer protocol to talk to each other. They, by default, use port 30303 to talk among themselves.

##### Proof of work
The miner who solves the puzzle first writes the block containing transactions to their own ledger and sends the block and nonce value to other miners for verification.

##### Proof of stake
Ether (a minimum of 32 ETH)

interested stakeholders can stake their Ether (a minimum of 32 ETH) with the network. Once the Ethers are staked, they are locked, and these stakeholders become validators. These validators have their nodes running, and their job is to attest to new blocks for their validity. Attestation here means that the validator is vouching for the correctness of the block and its constituent transactions.

#### Ethereum nodes
three types of nodes in Ethereum
• The EVM
• Mining nodes (Ethereum 1.0)
• Validators (Ethereum 2.0)
Please note that this distinction is made to clarify concepts of Ethereum. In most scenarios, there is no dedicated EVM. Instead, all nodes act as miners as well as EVM nodes.

#### Ether wei
https://github.com/ChainSafe/web3.js/blob/0.15.0/lib/utils/utils.js#L40

##### EVMs
EVMs are the execution components in Ethereum. The purpose of an EVM is to execute code in a smart contract line by line. However, when a transaction is submitted, the transaction is not executed immediately. Instead, it is added to a transaction pool. These transactions are not yet written to the Ethereum ledger.

``` sol
// SPDX-License-Identifier: MIT
pragma solidity >=0.7.0 <0.9.0;

contract HelloWorld
{

    string private stateVariable = "Hello World";

    function GetHelloWorld() public view returns ( string memory)
    {
        return stateVariable;
    }

}
```

# Ethereum  and Ganache v7.03
Installing Ethereum and Solidity, takes you through creating a private blockchain using the Ethereum platform. It will provide step-by-step guidance for creating a private chain. Another important tool in the Ethereum ecosystem is Ganache, which
is mainly used for development and testing purposes. This chapter will also show the process of installing Ganache and using it for developing, testing, and deploying Solidity contracts. You will also install MetaMask, which is a wallet and can interact with any kind of Ethereum network. MetaMask is used to create new accounts, interact with contracts, and use them. The mining of transactions will also be shown in this chapter. Remix is a great tool for authoring Solidity contracts, shown toward the end of the chapter.

# Solidity 0.8.13
Introducing Solidity, begins the Solidity journey. In this chapter, you'll learn
the basics of Solidity by understanding its different versions and how to use a version using pragma. Another important aspect of this chapter is understanding the big picture of authoring smart contracts. Smart contract layout will be discussed in depth using important constructs such as state variables, functions, constant functions, events, modifiers, fallbacks, enums, and structs. This chapter discusses and implements the most important element of any programming language—data types and variables. Data types can be simple or complex; there can be value and reference types and storage and memory types—all these types of variables will also be shown using examples.


# Functions, Modifiers, and Fallbacks, 
shows how to implement basic functions that accept inputs and return outputs, functions that just output the existing state without changing the state and modifiers. Modifiers help in organizing code better in Solidity. They help with security and reusing code within contracts. Fallbacks are important constructs and are executed when a function call does not match any of the existing function signatures. Fallbacks are also important for transferring Ether to contracts.
Both modifiers and fallbacks will be discussed and implemented with examples for easy understanding. Receive functions are relatively new in Solidity but sample coverage is provided on them in this chapter.


# Exceptions, Events, and Logging, 
covers exceptions, events, and logging, which are important in Solidity from a contract development perspective. Ether should be returned to the caller in the case of an error and exception. Exception handling will be explained and implemented in depth in this chapter using newer Solidity constructs, such as assert, require, and revert. The try-catch blocks introduced recently in Solidity are covered using multiple examples in this chapter. Events and logging help in understanding the execution of contracts and functions. This chapter will show and explain the implementation of both events and logs.


# Truffle Basics and Unit Testing, 
covers the basics of Truffle, including understanding its concepts, creating a project and understanding its project structure, modifying its configuration, and taking a sample contract through the entire life cycle of writing, testing, deploying, and migrating a contract. Testing is as important for contracts as writing a contract. Truffle helps in providing a framework to test; however, tests should be written. This chapter will discuss the basics of unit tests, writing unit tests using Solidity, and executing them against the smart contract. Unit tests will be executed by creating transactions and validating their results. This chapter will show implementation details for writing and executing unit tests for a sample contract. Interactively working with contracts using Truffle is also shown in this chapter.

# Debugging Contracts,
covers troubleshooting and debugging using multiple tools, such as Remix and events. This chapter will show how to execute code line by line, checking the state after every line of code and changing contract code accordingly.

# Assembly Programming, 
goes into a slightly more complex topic and explores assembly programming in Solidity. Solidity has its own assembly programming and this chapter covers it from the ground up, from working with variables, scopes, and blocks and returning values to advanced topics including working with memory and state slots and calling contract functions. This chapter also includes assembly examples related to determining whether an address is a contract address or not.


# Upgradable Smart Contracts, 
is an important chapter from a contract maintainability perspective. This chapter will take you on a journey from a non-upgradable contract to writing upgradable contracts using different strategies. Some of these strategies include upgradability using inheritance, composition, proxy contracts, and upgradable storage.

# Writing Secure Contracts, 
brings security into perspective related to smart contracts. It starts by listing some of the security best practices and then moves on to showing some of the most prevalent vulnerabilities with smart contracts and how best to avoid them. These include the complete implementation of reentrancy attacks on smart contracts and overflow/underflow attacks.


# Writing Token Contracts, 
is about building and implementing both ERC20 and ERC721 tokens. Fungible and Non-Fungible Tokens (NFTs) are explained with the help of complete implementation in this chapter. Implementation of some of the ancillary interfaces, such as ERC165 and ERC223, is also explained along with their implementations.

# Solidity Design Patterns, 
describes some of the important design patterns prevalent in Solidity. It starts with the modeling of entities in smart contracts and between contracts using references, relationships, and embedment. It also shows a complete example of performing CRUD operations on these entities. Some of the design patterns shown with implementations in this chapter include ownership, multi-ownership, and multi-sig contracts. We will also discuss haltable or stoppable smart contracts.

