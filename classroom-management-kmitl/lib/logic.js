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
 * Sample transaction
 * @param {classroom.management.kmitl.TeacherSubmitTeacherRoom} teacherSubmitTeacherRoom
 * @transaction
 */
async function teacherSubmitTeacherRoom(request) {
    
    const factory = getFactory();
    const namespace = 'classroom.management.kmitl';

    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }


    // Teacher can Submit TeacherSubmitTeacherRoom to update TeacherRoom
    const teacherRoom = request.roomId;
    teacherRoom.teacher = factory.newRelationship(namespace, 'Teachers', request.teacher.getIdentifier());
    teacherRoom.token = request.token;
    teacherRoom.timestamp = JSON.stringify(request.timestamp);
    teacherRoom.transactionId = request.getIdentifier();
    teacherRoom.transaction_p = transaction_p; 
    const assetRegistry = await getAssetRegistry(namespace + '.TeacherRoom');
    await assetRegistry.update(teacherRoom);

    const teachers = request.teacher;
    teachers.teacherRoom = factory.newRelationship(namespace, 'TeacherRoom',request.roomId.getIdentifier());
    const participantRegistry = await getParticipantRegistry(namespace + '.Teachers');
    await participantRegistry.update(teachers);
    
}
/**
 * @param {classroom.management.kmitl.TeacherSubmitTSRoom} teacherSubmitTSRoom
 * @transaction
 */
async function teacherSubmitTSRoom(request){
    const factory = getFactory();
    const namespace = 'classroom.management.kmitl';

    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }

    const tsRoom = request.roomId;
    tsRoom.teacher = factory.newRelationship(namespace, 'Teachers' ,request.teacher.getIdentifier());
    tsRoom.token = request.token;
    tsRoom.timestamp = JSON.stringify(request.timestamp);
    tsRoom.transactionId = request.getIdentifier();
    tsRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TSRoom');
    await assetRegistry.update(tsRoom);

    const teachers = request.teacher;
    teachers.tsRoom = factory.newRelationship(namespace, 'TSRoom' ,request.roomId.getIdentifier());
    const participantRegistry = await getParticipantRegistry(namespace + '.Teachers');
    await participantRegistry.update(teachers);
}
/**
 * @param {classroom.management.kmitl.StudentSubmitStudentRoom} studentSubmitStudentRoom
 * @transaction
 */
async function studentSubmitStudentRoom(request){
    const factory = getFactory();
    const namespace = 'classroom.management.kmitl';

    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }
    const studentRoom = request.roomId;
    studentRoom.student = factory.newRelationship(namespace, 'Students' ,request.student.getIdentifier());
    studentRoom.token = request.token;
    studentRoom.timestamp = JSON.stringify(request.timestamp);
    studentRoom.transactionId = request.getIdentifier();
    studentRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.StudentRoom');
    await assetRegistry.update(studentRoom);

    const students = request.student;
    students.studentRoom = factory.newRelationship(namespace, 'StudentRoom' ,request.roomId.getIdentifier());
    const participantRegistry = await getParticipantRegistry(namespace + '.Students');
    await participantRegistry.update(students);
}
/**
 * @param {classroom.management.kmitl.StudentSubmitTSRoom} studentSubmitTSRoom
 * @transaction
 */
async function studentSubmitTSRoom(request){
    const factory = getFactory();
    const namespace = 'classroom.management.kmitl';

    let transaction_p
    if (!request.roomId.transaction_p) {
        transaction_p = request.getIdentifier();
    } else {
        transaction_p = request.roomId.transactionId;
    }
    const tsRoom = request.roomId;
    tsRoom.student = factory.newRelationship(namespace, 'Students' ,request.student.getIdentifier());
    tsRoom.token = request.token;
    tsRoom.timestamp = JSON.stringify(request.timestamp);
    tsRoom.transactionId = request.getIdentifier();
    tsRoom.transaction_p = transaction_p;
    const assetRegistry = await getAssetRegistry(namespace + '.TSRoom');
    await assetRegistry.update(tsRoom);

    const students = request.student;
    students.tsRoom = factory.newRelationship(namespace, 'TSRoom' ,request.roomId.getIdentifier());
    const participantRegistry = await getParticipantRegistry(namespace + '.Students');
    await participantRegistry.update(students);
}