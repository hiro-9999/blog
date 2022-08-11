# コントラクトを作ってみる 🔴
https://qiita.com/ikead/items/1f7c49384fd90cde4646

#### Gethのインストール方法 マイニング 🔴
https://geth.ethereum.org/downloads/

http://kojiryo.com/762/

https://eng.shibuya24.info/tag/blockchain  <- need read ???

geth --datadir ~/geth/eth_private_net init ~/geth/eth_private_net/myGenesis.json

geth --networkid "15" --nodiscover --datadir "~/geth/eth_private_net" console 2>> ~/geth/eth_private_net/geth_err.log

https://eng.shibuya24.info/entry/geth_eghereum_4.  <= is good 🔴

## Ganache CLI
https://docs.nethereum.com/en/latest/ethereum-and-clients/ganache-cli/

Geth attach http://127.0.0.1:8545

#### web3.fromWei()でweiからetherに単位を変換できます。

> web3.fromWei(eth.getBalance(eth.accounts[1]), 'ether')
2

2 etherをweiに変換しています。

> web3.toWei(2, 'ether')
"2000000000000000000"

https://tech.isid.co.jp/entry/2021/12/03/Geth%28%E3%82%B2%E3%82%B9%29%E3%81%AF%E3%81%98%E3%82%81%E3%81%BE%E3%81%97%E3%81%9F

#### 報酬を紐づけるEOAのアドレス
etherbase
ここで、eth.coinbaseコマンドを実行してみます。すると下記のとおり実行結果には先ほど作成した2つのEOAのうちの一つが表示されます。このコマンドはetherbase（coinbaseとも呼ばれます）を表示するコマンドで、etherbaseとは、各ノードで採掘を行う際にその報酬を紐づけるEOAのアドレスを示します。
```geth
> eth.coinbase
"0xf631cd7a12788e85cb77f2371513b2c74cd6e56e"
> eth.accounts[0]
"0xf631cd7a12788e85cb77f2371513b2c74cd6e56e"


> personal.unlockAccount(eth.accounts[0])
> eth.getBalance(eth.accounts[1])

> eth.sendTransaction({from: eth.accounts[0], to: eth.accounts[1], value: web3.toWei(5, "ether")})
> eth.getTransaction("0x352eaba88b4659e3a8c175462f01b7f46673861b6e345763b960e01b21667898")
{
  blockHash: "0x60845fc76d5bea7b2e566243b5d7a57e778024e166c45dd84dc1e3117d4fba61",
  blockNumber: 34,
  chainId: "0xf",
  from: "0xf631cd7a12788e85cb77f2371513b2c74cd6e56e",
  gas: 21000,
  gasPrice: 1000000000,
  hash: "0x352eaba88b4659e3a8c175462f01b7f46673861b6e345763b960e01b21667898",
  input: "0x",
  nonce: 0,
  r: "0xe2d7ddadc1606eaad255834d6d1adb6a7dd31c846bf6206fffc0adfa2a15e39b",
  s: "0x3789028291ee3a94c569099536d6302eaa214d8ba9a377b73d8cd7e13d1b718b",
  to: "0xc9e2ab80b177f984891096eca5edec82fe18c791",
  transactionIndex: 0,
  type: "0x0",
  v: "0x42",
  value: 10000000000000000000
}
```
https://book.ethereum-jp.net/first_use/mining_ether

> miner.setEtherbase(eth.accounts[1])

> miner.start()

> miner.stop()

```
personal.newAccount("任意のパスワード")
personal.newAccount("test")
eth.accounts
miner.start(1)
eth.mining
web3.fromWei(eth.getBalance(eth.accounts[0]), "ether")
personal.unlockAccount("任意のアカウント")
web3.fromWei(eth.getBalance(eth.accounts[0]), "ether")
personal.unlockAccount(eth.accounts[0])
> eth.accounts[0]
"0xb94c342a7a1069a15fa247eff02a11b436f5b98d"
> eth.accounts[1]
"0x17b149c1f014b7ae5afdbc8643dddd527b667832"
//eth.sendTransaction({from:eth.accounts[0], to:eth.accounts[1], value: web3.toWei(10,"ether")})
eth.sendTransaction({to: "0xf39bb9cc59046c2291b25c3b92954e33b9825435", from: eth.accounts[0], value: 100})
miner.stop()
eth.getBlock(0)

geth % geth --datadir ~/geth/eth_private_net init ~/geth/eth_private_net/myGenesis.json
INFO [08-11|19:26:46.870] Maximum peer count                       ETH=50 LES=0 total=50
INFO [08-11|19:26:46.874] Set global gas cap                       cap=50,000,000
INFO [08-11|19:26:46.875] Allocated cache and file handles         database=~/eth_private_net/geth/chaindata cache=16.00MiB handles=16
INFO [08-11|19:26:47.154] Opened ancient database                  database=~/geth/eth_private_net/geth/chaindata/ancient readonly=false
INFO [08-11|19:26:47.154] Writing custom genesis block
INFO [08-11|19:26:47.156] Persisted trie from memory database      nodes=3 size=397.00B time="148.5µs" gcnodes=0 gcsize=0.00B gctime=0s livenodes=1 livesize=0.00B
INFO [08-11|19:26:47.157] Successfully wrote genesis state         database=chaindata hash=183ffe..c3fcaf
INFO [08-11|19:26:47.157] Allocated cache and file handles         database=~/geth/eth_private_net/geth/lightchaindata cache=16.00MiB handles=16
INFO [08-11|19:26:47.486] Opened ancient database                  database=~/geth/eth_private_net/geth/lightchaindata/ancient readonly=false
INFO [08-11|19:26:47.486] Writing custom genesis block
INFO [08-11|19:26:47.487] Persisted trie from memory database      nodes=3 size=397.00B time="362.583µs" gcnodes=0 gcsize=0.00B gctime=0s livenodes=1 livesize=0.00B
INFO [08-11|19:26:47.489] Successfully wrote genesis state         database=lightchaindata hash=183ffe..c3fcaf

> eth.getBlock(0)
{
  difficulty: 16384,
  extraData: "0x",
  gasLimit: 134217728,
  gasUsed: 0,
  hash: "0x7b2e8be699df0d329cc74a99271ff7720e2875cd2c4dd0b419ec60d1fe7e0432",
  logsBloom: "0x00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000",
  miner: "0x3333333333333333333333333333333333333333",
  mixHash: "0x0000000000000000000000000000000000000000000000000000000000000000",
  nonce: "0x0000000000000042",
  number: 0,
  parentHash: "0x0000000000000000000000000000000000000000000000000000000000000000",
  receiptsRoot: "0x56e81f171bcc55a6ff8345e692c0f86e5b48e01b996cadc001622fb5e363b421",
  sha3Uncles: "0x1dcc4de8dec75d7aab85b567b6ccd41ad312451b948a7413f0a142fd40d49347",
  size: 507,
  stateRoot: "0x56e81f171bcc55a6ff8345e692c0f86e5b48e01b996cadc001622fb5e363b421",
  timestamp: 0,
  totalDifficulty: 16384,
  transactions: [],
  transactionsRoot: "0x56e81f171bcc55a6ff8345e692c0f86e5b48e01b996cadc001622fb5e363b421",
  uncles: []
}
```
https://ethereum.org/en/
```geth
> eth.getBlock(3)
> eth

???===
https://ethereum.stackexchange.com/questions/57537/geth-1-8-15-flag-provided-but-not-defined-fast

$ geth --dev --gcmode full 

https://www.quicknode.com/guides/infrastructure/how-to-install-and-run-a-geth-node

https://subscription.packtpub.com/book/big-data-and-business-intelligence/9781789133998/1/ch01lvl1sec04/setting-up-a-node-and-participating-in-a-network
抜粋:
Ethereum Cookbook 
Manoj P R
```
##### geth port is 8545
If no other commands are provided, Geth falls back to its default behaviour of accepting connections from the local loopback interface (127.0.0.1). The default listening port is 8545. The ip address and listening port can be customized using the --http.addr and --http.port flags:

geth --http --http.port 3334

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
https://qiita.com/yusukeito58/items/2ca16a768c7347a0f7bd

$ solc --bin --abi hogehoge.sol

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

### ganache -p 9090 🔴
Geth attach http://127.0.0.1:9090
```
> personal.newAccount("password")
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

//sudo npm install -g solc <- not need

//solcjs BoolContract.sol --abi --bin <- not need

### macのターミナルでSolidityをコンパイル  🔴
https://qiita.com/yusukeito58/items/2ca16a768c7347a0f7bd

https://qiita.com/ikead/items/1f7c49384fd90cde4646

```
$ brew update
$ brew upgrade
$ brew tap ethereum/ethereum
$ brew install solidity

% solc --bin --abi BoolContract.sol

======= BoolContract.sol:BoolContract =======
Binary:
608060405260016000806101000a81548160ff02191690831515021790555034801561002a57600080fd5b5061016a8061003a6000396000f3fe608060405234801561001057600080fd5b50600436106100365760003560e01c80639257618a1461003b578063b8d5a30f14610059575b600080fd5b610043610077565b60405161005091906100e2565b60405180910390f35b6100616100a5565b60405161006e9190610119565b60405180910390f35b6000806000806101000a81548160ff02191690831515021790555060008054906101000a900460ff16905090565b6000806000806101000a81548160ff021916908315150217905550600a905090565b60008115159050919050565b6100dc816100c7565b82525050565b60006020820190506100f760008301846100d3565b92915050565b600060ff82169050919050565b610113816100fd565b82525050565b600060208201905061012e600083018461010a565b9291505056fea2646970667358221220479a864809dbbc595e51b0a2df0a17d867672aa4d115496933cf0725050ab1dc64736f6c63430008100033
Contract JSON ABI
[{"inputs":[],"name":"convertToUint","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"manageBool","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"}]
```
出力されたBINとABIをコピーして、Geth上で下記のように登録します。

> bin = "0x606060405〜"
> abi = [{"constant":〜
## ※binは先頭に「0x」を付与する必要があります。

最後にhogeという変数にコントラクトを定義します。

> hoge = eth.contract(abi).new({ from: eth.accounts[0], data: bin, gas: 1000000 })
あとはhoge変数でコントラクトを操作できます。

```
> bin  = "0x608060405260016000806101000a81548160ff02191690831515021790555034801561002a57600080fd5b5061016a8061003a6000396000f3fe608060405234801561001057600080fd5b50600436106100365760003560e01c80639257618a1461003b578063b8d5a30f14610059575b600080fd5b610043610077565b60405161005091906100e2565b60405180910390f35b6100616100a5565b60405161006e9190610119565b60405180910390f35b6000806000806101000a81548160ff02191690831515021790555060008054906101000a900460ff16905090565b6000806000806101000a81548160ff021916908315150217905550600a905090565b60008115159050919050565b6100dc816100c7565b82525050565b60006020820190506100f760008301846100d3565b92915050565b600060ff82169050919050565b610113816100fd565b82525050565b600060208201905061012e600083018461010a565b9291505056fea2646970667358221220479a864809dbbc595e51b0a2df0a17d867672aa4d115496933cf0725050ab1dc64736f6c63430008100033"
"0x608060405260016000806101000a81548160ff02191690831515021790555034801561002a57600080fd5b5061016a8061003a6000396000f3fe608060405234801561001057600080fd5b50600436106100365760003560e01c80639257618a1461003b578063b8d5a30f14610059575b600080fd5b610043610077565b60405161005091906100e2565b60405180910390f35b6100616100a5565b60405161006e9190610119565b60405180910390f35b6000806000806101000a81548160ff02191690831515021790555060008054906101000a900460ff16905090565b6000806000806101000a81548160ff021916908315150217905550600a905090565b60008115159050919050565b6100dc816100c7565b82525050565b60006020820190506100f760008301846100d3565b92915050565b600060ff82169050919050565b610113816100fd565b82525050565b600060208201905061012e600083018461010a565b9291505056fea2646970667358221220479a864809dbbc595e51b0a2df0a17d867672aa4d115496933cf0725050ab1dc64736f6c63430008100033"

> abi = [{"inputs":[],"name":"convertToUint","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"manageBool","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"}]
[{
    inputs: [],
    name: "convertToUint",
    outputs: [{
        internalType: "uint8",
        name: "",
        type: "uint8"
    }],
    stateMutability: "nonpayable",
    type: "function"
}, {
    inputs: [],
    name: "manageBool",
    outputs: [{
        internalType: "bool",
        name: "",
        type: "bool"
    }],
    stateMutability: "nonpayable",
    type: "function"
}]

> hoge = eth.contract(abi).new({ from: eth.accounts[0], data: bin, gas: 1000000 })
{
  abi: [{
      inputs: [],
      name: "convertToUint",
      outputs: [{...}],
      stateMutability: "nonpayable",
      type: "function"
  }, {
      inputs: [],
      name: "manageBool",
      outputs: [{...}],
      stateMutability: "nonpayable",
      type: "function"
  }],
  address: undefined,
  transactionHash: "0xe3ffd66ae540c2dba260dd4d05e3cedee2d94d094cc768dd4909c957049f60de"
}

> hoge
{
  abi: [{
      inputs: [],
      name: "convertToUint",
      outputs: [{...}],
      stateMutability: "nonpayable",
      type: "function"
  }, {
      inputs: [],
      name: "manageBool",
      outputs: [{...}],
      stateMutability: "nonpayable",
      type: "function"
  }],
  address: "0x3f9ab25bb4b37e4bbd0c93cf0660b4083bfcb018",
  transactionHash: "0xd728f26774aa295cfdc2ca4ed47529afc1dd1af356c21ccc558e0d0c96cdfa5e",
  allEvents: function bound(),
  convertToUint: function bound(),
  manageBool: function bound()
}
> hoge.convertToUint
function bound()
> hoge.convertToUint.call()
10
> hoge.manageBool
function bound()
> hoge.manageBool.call()
false
```


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

