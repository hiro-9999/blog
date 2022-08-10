# コントラクトを作ってみる 🔴
https://qiita.com/ikead/items/1f7c49384fd90cde4646

https://ethereum.org/en/
```geth
> eth.getBlock(3)
> eth

???===
“$ geth --networkid 3 --datadir "./ropsten-db" --keystore "./ropsten-keys" --syncmode "full" --rpc --rpcport "9090" --rpcapi "web3,eth,miner,admin" --rpccorsdomain "*" --port 30301 console”

geth --dat–ir=./ --networki–9090 --identity "ritesh --http - http.api="admin,debug,txpool,mi"e–eth,net,web3,personal" --snapshot=false

$ geth --networkid 5 --datadir "./ropsten-db" --keystore "./ropsten-keys" --syncmode "full" --rpcapi "web3,eth,miner,admin" --rpccorsdomain "*" --port 30301 console

https://subscription.packtpub.com/book/big-data-and-business-intelligence/9781789133998/1/ch01lvl1sec04/setting-up-a-node-and-participating-in-a-network
抜粋:
Ethereum Cookbook 
Manoj P R
```

# read ?? Ethereum-Cookbook
https://github.com/PacktPublishing/Ethereum-Cookbook

“There are several clients that implement the Ethereum protocol and we will mainly focus on geth and parity”
https://www.parity.io/technologies/ethereum/

抜粋:
Ethereum Cookbook
Manoj P R
この素材は著作権で保護されている可能性があります。

# ??
deployed using frameworks such as Truffle/Hardhat.
```
contract{
  constructor() {
  simpleInt = 5;
  }
}
```
# Solidity doc 🔴
type:
docs.soliditylang.org/en/v0.8.9/types.html

control-structures:
https://docs.soliditylang.org/en/v0.8.9/control-structures.html

Further reading
The Ethereum documentation is a great place to get started with basic concepts:

https://ethereum.org/en/developers/docs/

１イーサ = 10^18 wei  🔴
https://docs.soliditylang.org/en/v0.8.16/units-and-global-variables.html?highlight=units-and-global-variables
```
assert(1 wei == 1);
assert(1 gwei == 1e9);
assert(1 ether == 1e18);
> eth.sendTransaction({to: "0xc94d95a5106270775351eecfe43f97e8e75e59e8", from: eth.accounts[0], value: 1e18})
"0xc5c8297f4408bd40924e376e1f80b9ae9ecf0cad147a72cf0a86f18b56690a6e"
> eth.getBalance("0xc94d95a5106270775351eecfe43f97e8e75e59e8")
1000000000000025000
```


### CLI 
parity rust

Geth go

eth c++

mist

It destroys the current contract, sending its available funds to the given address, as shown next:
#### Selfdestruct(0x5B38Da6a701c568545dCfcB03FcB875f56beddC4)

#### ecrecover function to extract the address.  ????
```
var sig = eth.sign(eth.accounts[0], msg)
> var r = sig.substr(0,66)
> var s = "0x" + sig.substr(66,64)
> var v = 28
> console.log(r)


Address(this).transfer(1 ether)

> var msg = web3.sha3("hello ritesh")
> console.log(msg)
0x23ad06b0e032848201fe7dccf69320f381a6de007e7e9a0896f5cf04821cc95f
```

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

# wallet
https://ethereum.org/zh/wallets/find-wallet/


# cryptography
Asymmetric cryptography　// Symmetric cryptography

#### Hashing -- root transaction (Keccak256 = SHA3 not SHA-256)
transaction Merkle root hash

#### Digital signatures
Alice creates a hash of the entire payload and encrypts the hash with her private key. She appends the resultant digital signature to the hash and transmits it to Tom. When the transaction reaches Tom, he extracts the digital signature and decrypts it using Alice's public key to find the original hash. 

so you'll also learn about hash, encryption, and the usage of keys for creating transactions and accounts. How transactions and accounts are created, how gas is paid for each transaction, the difference between message calls and transactions, and the storage of code and state management will be explained in detail.

#### Ether, gas, and transactions
https://block-chain.jp/ethereum/gas-limit-gas-price/

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
#### Solidity compiler.
npm install solc

https://github.com/ethereum/solc-js

The bytecode and ABI are necessary inputs for deploying a contract.

The compiler generates the following two major artifacts:
• The Application Binary Interface (ABI) definition
• Contracts bytecode

#### Introducing Solidity
```
• Solidity and Solidity files
• The structure of a contract
• Data types in Solidity
• Storage and memory data locations
• Literals
• Integers
• Booleans
• The byte data type
• Arrays
The structure of an array Enumeration
The address type
The mapping type
```

# Ethereum  and Ganache v7.03
Installing Ethereum and Solidity, takes you through creating a private blockchain using the Ethereum platform. It will provide step-by-step guidance for creating a private chain. Another important tool in the Ethereum ecosystem is Ganache, which
is mainly used for development and testing purposes. This chapter will also show the process of installing Ganache and using it for developing, testing, and deploying Solidity contracts. You will also install MetaMask, which is a wallet and can interact with any kind of Ethereum network. MetaMask is used to create new accounts, interact with contracts, and use them. The mining of transactions will also be shown in this chapter. Remix is a great tool for authoring Solidity contracts, shown toward the end of the chapter.
```
• Ethereum networks
  test networks available at the time of writing, such as Ropsten, Kovan, Goerli, and Rinkeby.
• Installing and configuring Geth
• Creating a private network
• Installing ganache-cli
• Installing the Solidity compiler
• Installing the web3 framework
• Installing and working with MetaMask
Solc ??
```
### Installing Geth
https://geth.ethereum.org/docs/install-and-build/installing-geth

#### geth --help
https://geth.ethereum.org/docs/install-and-build/installing-geth

https://geth.ethereum.org/docs/interface/command-line-options

Geth provides the --ropsten option to connect to the Ropsten network, the --rinkeby option to connect to the Rinkeby test network, and the –-goerli option to connect to the Goerli test network. These should be used in conjunction with the networkid command option. It also provides the –mainnet option to connect to the main network.

###### Creating a private network 🔴
// geth --networkid 12345

https://geth.ethereum.org/docs/interface/private-network

geth account new --datadir data

```
 geth account new --datadir data
INFO [08-10|19:23:50.593] Maximum peer count                       ETH=50 LES=0 total=50
Your new account is locked with a password. Please give a password. Do not forget this password.
Password:
Repeat password:

Your new key was generated

Public address of the key:   0x3B47396Bb31319040A25fbAA3a3fE39E9722f231
Path of the secret key file: data/keystore/UTC--2022-08-10T10-24-02.966942000Z--3b47396bb31319040a25fbaa3a3fe39e9722f231

- You can share your public address with anyone. Others need it to interact with you.
- You must NEVER share the secret key with anyone! The key controls access to your funds!
- You must BACKUP your key file! Without the key, it's impossible to access account funds!
- You must REMEMBER your password! Without the password, it's impossible to decrypt the key!
```
geth init --datadir data genesis.json

geth --datadir data --networkid 12345

#### geth attach ***/Documents/blockchain/data/geth.ipc
Welcome to the Geth JavaScript console!
```
> personal.newAccount()
> personal.newAccount()
Passphrase:
Repeat passphrase:
"0x874abfeefc231eefbf7a2ae9b444fe70f3df5160"

> miner.setEtherBase("0x874abfeefc231eefbf7a2ae9b444fe70f3df5160") // donnt need to do it!!!

> eth.coinbase
"0x874abfeefc231eefbf7a2ae9b444fe70f3df5160"

miner.start()

miner.stop()

https://github.com/trufflesuite/ganache
npm install ganache --global
//npm install -g ganache-cli
//npm install -g ganache-cli --force

ganache -p 9090
Geth attach http://127.0.0.1:9090

> eth.getBalance(eth.accounts[0])

```

```
> eth.getBalance(eth.accounts[0])
1e+21
> eth.sendTransaction({to: "0xc94d95a5106270775351eecfe43f97e8e75e59e8", from: eth.accounts[0], value: 25000})
"0xd926b75d3af120646ae07f0fa1a150bcc2f5fe128beb9b74e109275ad137e2f4"
> eth.getBalance("0xc94d95a5106270775351eecfe43f97e8e75e59e8")
25000
> eth.getBalance(eth.accounts[0])
999999976744140600000

> eth.accounts[0]
"0x9f23e2501156975f85c407591a0f345fa3e7a3d5"

https://qiita.com/ikead/items/1f7c49384fd90cde4646 ok!!!
eth.blockNumber

personal.newAccount("test1")

```
npm install web3

``` metamask
enforce mind once doctor pull good cluster ensure deliver impact pyramid mass

local host 9090

http://127.0.0.1:9090
chain id :1337
```

#### Installing the Solidity compiler

npm install -g solc

# Solidity 0.8.13
Introducing Solidity, begins the Solidity journey. In this chapter, you'll learn
the basics of Solidity by understanding its different versions and how to use a version using pragma. Another important aspect of this chapter is understanding the big picture of authoring smart contracts. Smart contract layout will be discussed in depth using important constructs such as state variables, functions, constant functions, events, modifiers, fallbacks, enums, and structs. This chapter discusses and implements the most important element of any programming language—data types and variables. Data types can be simple or complex; there can be value and reference types and storage and memory types—all these types of variables will also be shown using examples.


# Functions, Modifiers, and Fallbacks, 
shows how to implement basic functions that accept inputs and return outputs, functions that just output the existing state without changing the state and modifiers. Modifiers help in organizing code better in Solidity. They help with security and reusing code within contracts. Fallbacks are important constructs and are executed when a function call does not match any of the existing function signatures. Fallbacks are also important for transferring Ether to contracts.
Both modifiers and fallbacks will be discussed and implemented with examples for easy understanding. Receive functions are relatively new in Solidity but sample coverage is provided on them in this chapter.


# Exceptions, Events, and Logging, 
covers exceptions, events, and logging, which are important in Solidity from a contract development perspective. Ether should be returned to the caller in the case of an error and exception. Exception handling will be explained and implemented in depth in this chapter using newer Solidity constructs, such as assert, require, and revert. The try-catch blocks introduced recently in Solidity are covered using multiple examples in this chapter. Events and logging help in understanding the execution of contracts and functions. This chapter will show and explain the implementation of both events and logs.


# Truffle Basics and Unit Testing, 
https://blog.mktia.com/change-solidity-version/
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

