/*
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

'use strict';
/**
 * Write your transction processor functions here
 */

/**
 * Coin transaction
 * @param {classroom.management.kmitl.CreateTrans} CreateTrans
 * @transaction
 */

async function CreateTrans(request) {
    const factory = getFactory();
    const namespace = 'classroom.management.kmitl';
    
    if (request.fromAdmin.getIdentifier() != "" && request.toAdmin.getIdentifier()) {
        console.log(request.fromAdmin.adminId);
        console.log(request.fromWallet.money);
        const oldFromMoney = request.fromWallet.money;
        console.log(request.toAdmin.adminId);
        console.log(request.toWallet.money);
        const oldToMoney = request.toWallet.money
        console.log(request.money);

        if (request.money <= request.fromWallet.money) {
            const CoinAdminFrom = request.fromWallet;
            CoinAdminFrom.money = request.fromWallet.money - request.money;
            const assetRegistry = await getAssetRegistry(namespace + '.CoinAdmin');
            await assetRegistry.update(CoinAdminFrom);

            const CoinAdminTo = request.toWallet;
            CoinAdminTo.money = request.toWallet.money + request.money;
            const assetRegistry2 = await getAssetRegistry(namespace + '.CoinAdmin');
            await assetRegistry2.update(CoinAdminTo);

            const CreateTransEvent = factory.newEvent(namespace, 'CreateTransEvent');
            CreateTransEvent.from = request.fromAdmin.adminId;
            CreateTransEvent.to = request.toAdmin.adminId;
            CreateTransEvent.oldFromMoney = oldFromMoney;
            CreateTransEvent.newFromMoney = CoinAdminFrom.money;
            CreateTransEvent.oldToMoney = oldToMoney ;
            CreateTransEvent.newToMoney = CoinAdminTo.money;
            emit(CreateTransEvent);

        } else {
            throw Error ("You can't update the transaction");
        }

        // const CoinAdmin 


        // const OrderStatus = updateOrderRequest.saleOrder;
        // OrderStatus.orderStatus = "HEADOFFICE_COMMITED";
        // const assetRegistry2 = await getAssetRegistry(namespace + '.SaleOrder');
        // await assetRegistry2.update(OrderStatus);


        // const PackingProcess = factory.newResource(namespace, 'PackingProcess', oldHeadOfficeProcess.orderId);
        // PackingProcess.productDetail = oldHeadOfficeProcess.productDetail;
        // PackingProcess.packingTeamStatus = 'HEADOFFICE_CREATE_ORDER';
        // PackingProcess.packingTeam = factory.newRelationship(namespace, 'PackingTeam', updateOrderRequest.packingTeam.getIdentifier());
        // const assetRegistry = await getAssetRegistry(PackingProcess.getFullyQualifiedType());
        // await assetRegistry.add(PackingProcess);

        
        
    }
    // console.log(request.fromAdmin.getIdentifier());
    

}
